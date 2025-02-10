const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

/**
 * Hàm tải template
 *
 * Cách dùng:
 * <div id="parent"></div>
 * <script>
 *  load("#parent", "./path-to-template.html");
 * </script>
 */
function load(selector, path) {
    const cached = localStorage.getItem(path);
    if (cached) {
        $(selector).innerHTML = cached;
    }

    fetch(path)
        .then((res) => res.text())
        .then((html) => {
            if (html !== cached) {
                $(selector).innerHTML = html;
                localStorage.setItem(path, html);
            }
        })
        .finally(() => {
            window.dispatchEvent(new Event("template-loaded"));
        });
}

/**
 * Hàm kiểm tra một phần tử
 * có bị ẩn bởi display: none không
 */
function isHidden(element) {
    if (!element) return true;

    if (window.getComputedStyle(element).display === "none") {
        return true;
    }

    let parent = element.parentElement;
    while (parent) {
        if (window.getComputedStyle(parent).display === "none") {
            return true;
        }
        parent = parent.parentElement;
    }

    return false;
}

/**
 * Hàm buộc một hành động phải đợi
 * sau một khoảng thời gian mới được thực thi
 */
function debounce(func, timeout = 300) {
    let timer;
    return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => {
            func.apply(this, args);
        }, timeout);
    };
}

/**
 * Hàm tính toán vị trí arrow cho dropdown
 *
 * Cách dùng:
 * 1. Thêm class "js-dropdown-list" vào thẻ ul cấp 1
 * 2. CSS "left" cho arrow qua biến "--arrow-left-pos"
 */
const calArrowPos = debounce(() => {
    if (isHidden($(".js-dropdown-list"))) return;

    const items = $$(".js-dropdown-list > li");

    items.forEach((item) => {
        const arrowPos = item.offsetLeft + item.offsetWidth / 2;
        item.style.setProperty("--arrow-left-pos", `${arrowPos}px`);
    });
});

// Tính toán lại vị trí arrow khi resize trình duyệt
window.addEventListener("resize", calArrowPos);

// Tính toán lại vị trí arrow sau khi tải template
window.addEventListener("template-loaded", calArrowPos);

/**
 * Giữ active menu khi hover
 *
 * Cách dùng:
 * 1. Thêm class "js-menu-list" vào thẻ ul menu chính
 * 2. Thêm class "js-dropdown" vào class "dropdown" hiện tại
 *  nếu muốn reset lại item active khi ẩn menu
 */
window.addEventListener("template-loaded", handleActiveMenu);

function handleActiveMenu() {
    const dropdowns = $$(".js-dropdown");
    const menus = $$(".js-menu-list");
    const activeClass = "menu-column__item--active";

    const removeActive = (menu) => {
        menu.querySelector(`.${activeClass}`)?.classList.remove(activeClass);
    };

    const init = () => {
        menus.forEach((menu) => {
            const items = menu.children;
            if (!items.length) return;

            removeActive(menu);
            if (window.innerWidth > 991) items[0].classList.add(activeClass);

            Array.from(items).forEach((item) => {
                item.onmouseenter = () => {
                    if (window.innerWidth <= 991) return;
                    removeActive(menu);
                    item.classList.add(activeClass);
                };
                item.onclick = () => {
                    if (window.innerWidth > 991) return;
                    removeActive(menu);
                    item.classList.add(activeClass);
                    item.scrollIntoView();
                };
            });
        });
    };

    init();

    dropdowns.forEach((dropdown) => {
        dropdown.onmouseleave = () => init();
    });
}

/**
 * JS toggle
 *
 * Cách dùng:
 * <button class="js-toggle" toggle-target="#box">Click</button>
 * <div id="box">Content show/hide</div>
 */
window.addEventListener("template-loaded", initJsToggle);

function initJsToggle() {
    $$(".js-toggle").forEach((button) => {
        const target = button.getAttribute("toggle-target");
        if (!target) {
            document.body.innerText = `Cần thêm toggle-target cho: ${button.outerHTML}`;
        }
        button.onclick = (e) => {
            e.preventDefault();
            if (!$(target)) {
                return (document.body.innerText = `Không tìm thấy phần tử "${target}"`);
            }
            const isHidden = $(target).classList.contains("hide");

            requestAnimationFrame(() => {
                $(target).classList.toggle("hide", !isHidden);
                $(target).classList.toggle("show", isHidden);
            });
        };
        document.onclick = function (e) {
            if (!e.target.closest(target)) {
                const isHidden = $(target).classList.contains("hide");
                if (!isHidden) {
                    button.click();
                }
            }
        };
    });
}
window.addEventListener("template-loaded", () => {
    const links = $$(".js-dropdown-list > li > a");

    links.forEach((link) => {
        link.onclick = () => {
            if (window.innerWidth > 991) return;
            const item = link.closest("li");
            item.classList.toggle("navbar__item--active");
        };
    });
});

window.addEventListener("template-loaded", () => {
    const switchBtn = document.querySelector("#switch-theme-btn");
    if (switchBtn) {
        switchBtn.onclick = function () {
            const isDark = localStorage.dark === "true";
            document.querySelector("html").classList.toggle("dark", !isDark);
            localStorage.setItem("dark", !isDark);
            switchBtn.querySelector("span").textContent = isDark ? "Dark mode" : "Light mode";
        };
        const isDark = localStorage.dark === "true";
        switchBtn.querySelector("span").textContent = isDark ? "Light mode" : "Dark mode";
    }
});

const isDark = localStorage.dark === "true";
document.querySelector("html").classList.toggle("dark", isDark);

document.addEventListener("DOMContentLoaded", function () {
    const slider = $(".filter__form-slider");
    const minPriceInput = $("#minPrice");
    const maxPriceInput = $("#maxPrice");
    const sliderRect = slider.getBoundingClientRect();

    const MIN_PRICE_MIN = 0;
    const MIN_PRICE_MAX = 30000000;
    const MAX_PRICE_MIN = 1000000;
    const MAX_PRICE_MAX = 30000000;

    let minValue = 1000000;
    let maxValue = 7000000;
    let isDraggingMin = false;
    let isDraggingMax = false;

    function formatCurrency(value) {
        return new Intl.NumberFormat("vi-VN", { style: "currency", currency: "VND" }).format(value);
    }

    function updateSlider() {
        const minPercent = ((minValue - MIN_PRICE_MIN) / (MIN_PRICE_MAX - MIN_PRICE_MIN)) * 100;
        const maxPercent = ((maxValue - MAX_PRICE_MIN) / (MAX_PRICE_MAX - MAX_PRICE_MIN)) * 100;
        slider.style.setProperty("--min-value", `${minPercent}%`);
        slider.style.setProperty("--max-value", `${maxPercent}%`);
        minPriceInput.value = formatCurrency(minValue);
        maxPriceInput.value = formatCurrency(maxValue);
    }

    function handleMinInputChange(e) {
        const value = parseFloat(e.target.value.replace(/[^0-9]/g, ""));
        minValue = Math.min(Math.max(value, MIN_PRICE_MIN), MIN_PRICE_MAX);
        if (minValue > maxValue) minValue = maxValue;
        updateSlider();
    }

    function handleMaxInputChange(e) {
        const value = parseFloat(e.target.value.replace(/[^0-9]/g, ""));
        maxValue = Math.max(Math.min(value, MAX_PRICE_MAX), MAX_PRICE_MIN);
        if (maxValue < minValue) maxValue = minValue;
        updateSlider();
    }

    minPriceInput.addEventListener("input", handleMinInputChange);
    maxPriceInput.addEventListener("input", handleMaxInputChange);

    slider.addEventListener("mousedown", function (e) {
        const x = e.clientX - sliderRect.left;
        const minHandlePos = ((minValue - MIN_PRICE_MIN) / (MIN_PRICE_MAX - MIN_PRICE_MIN)) * sliderRect.width;
        const maxHandlePos = ((maxValue - MAX_PRICE_MIN) / (MAX_PRICE_MAX - MAX_PRICE_MIN)) * sliderRect.width;

        if (Math.abs(x - minHandlePos) < 15) {
            isDraggingMin = true;
        } else if (Math.abs(x - maxHandlePos) < 15) {
            isDraggingMax = true;
        }
    });

    document.addEventListener("mousemove", function (e) {
        if (isDraggingMin || isDraggingMax) {
            const x = e.clientX - sliderRect.left;
            const percent = (x / sliderRect.width) * 100;

            if (isDraggingMin) {
                const value = MIN_PRICE_MIN + (percent / 100) * (MIN_PRICE_MAX - MIN_PRICE_MIN);
                minValue = Math.min(Math.max(value, MIN_PRICE_MIN), MIN_PRICE_MAX);
                if (minValue > maxValue) minValue = maxValue;
            } else if (isDraggingMax) {
                const value = MAX_PRICE_MIN + (percent / 100) * (MAX_PRICE_MAX - MAX_PRICE_MIN);
                maxValue = Math.max(Math.min(value, MAX_PRICE_MAX), MAX_PRICE_MIN);
                if (maxValue < minValue) maxValue = minValue;
            }

            updateSlider();
        }
    });

    document.addEventListener("mouseup", function () {
        isDraggingMin = false;
        isDraggingMax = false;
    });

    updateSlider();
});
