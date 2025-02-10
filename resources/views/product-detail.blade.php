<!DOCTYPE html>
<html lang="en" class="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Grocery Mart</title>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
        <link rel="manifest" href="./assets/favicon/site.webmanifest" />
        <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />
        <!-- Fonts -->
        <link rel="stylesheet" href="./assets/fonts/stylesheet.css" />
        <!-- Owl Carousel CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        />
        <!-- Styles -->
        <link rel="stylesheet" href="./assets/css/main.css" />

        <!-- Scripts -->
        <script src="./assets/js/scripts.js"></script>
    </head>
    <body>
        <header id="header" class="header"></header>
        <script>
            load("#header", "./templates/header-logined.html");
        </script>
        <main class="product-page">
            <div class="container">
                <!-- search bar -->
                <div class="product-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/sreach.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>
                <!-- breadcrumbs -->
                <div class="product-container">
                    <!-- breadcrumbs -->
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#!" class="breadcrumbs__link">
                                Điện thoại
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"> iPhone </a>
                        </li>
                    </ul>
                </div>
                <!-- product info -->
                <div class="product-container prod-info-content">
                    <div class="row product-container__xl">
                        <div class="col-5 col-xl-6 col-lg-12">
                            <div class="prod-preview">
                                <div class="prod-preview__list owl-carousel">
                                    <div class="prod-preview__item">
                                        <img
                                            src="https://achaumobile.com/wp-content/uploads/2024/09/16-pro-titan-achaum-600x600.png"
                                            alt=""
                                            class="prod-preview__img"
                                        />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_white_titan_ec6c800e82.png"
                                            alt=""
                                            class="prod-preview__img"
                                        />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_black_titan_b3274fbf05.png"
                                            alt=""
                                            class="prod-preview__img"
                                        />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_desert_titan_3552a28ae0.png"
                                            alt=""
                                            class="prod-preview__img"
                                        />
                                    </div>
                                </div>
                                <div class="prod-preview__thumbs">
                                    <img
                                        src="https://achaumobile.com/wp-content/uploads/2024/09/16-pro-titan-achaum-600x600.png"
                                        alt=""
                                        class="prod-preview__thumb-img prod-preview__thumb-img--current"
                                    />
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_white_titan_ec6c800e82.png"
                                        alt=""
                                        class="prod-preview__thumb-img"
                                    />
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_black_titan_b3274fbf05.png"
                                        alt=""
                                        class="prod-preview__thumb-img"
                                    />
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/iphone_16_pro_max_desert_titan_3552a28ae0.png"
                                        alt=""
                                        class="prod-preview__thumb-img"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-xl-6 col-lg-12">
                            <form action="" class="form">
                                <section class="prod-info">
                                    <h1 class="prod-info__heading">iPhone 16 Pro Max 8GB/256GB</h1>
                                    <div class="row">
                                        <div class="col-5 col-xxl-6 col-xl-12">
                                            <!-- <div class="prod-prop">
                                                <img src="./assets/icons/star.svg" alt="" class="prod-prop__icon" />
                                                <h4 class="prod-prop__title">(3.5) 1100 reviews</h4>
                                            </div> -->
                                            <label for="" class="form__label prod-info__label"></label>

                                            <div class="filter__form-group">
                                                <div class="form__tags">
                                                    <a href="#!" class="form__tag prod-info__tag">
                                                        Giá sản phẩm đã bao gồm VAT
                                                    </a>
                                                    <a href="#!" class="form__tag prod-info__tag">Bảo hành 12 tháng</a>
                                                    <a href="#!" class="form__tag prod-info__tag">
                                                        Mới, đầy đủ phụ kiện từ nhà sản xuất
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 col-xxl-6 col-xl-12">
                                            <div class="prod-props">
                                                <div class="prod-prop">
                                                    <img
                                                        src="./assets/icons/cart.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon"
                                                    />
                                                    <div>
                                                        <h4 class="prod-prop__title">Giao hàng</h4>
                                                        <p class="prod-prop__desc">Thời gian giao từ 1 - 3 ngày</p>
                                                    </div>
                                                </div>
                                                <div class="prod-prop">
                                                    <img
                                                        src="./assets/icons/bag.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon"
                                                    />
                                                    <div>
                                                        <h4 class="prod-prop__title">Cửa hàng</h4>
                                                        <p class="prod-prop__desc">Được bán trên toàn bộ chi nhánh</p>
                                                    </div>
                                                </div>
                                                <div class="prod-info__card">
                                                    <div class="prod-info__row">
                                                        <span class="prod-info__price">36.200.000</span>
                                                        <span class="prod-info__tax"> 11,05%</span>
                                                    </div>
                                                    <p class="prod-info__total-price">32.200.000</p>
                                                    <div class="prod-info__row">
                                                        <button class="btn btn--primary prod-info__add-to-cart">
                                                            Thêm vào giỏ hàng
                                                        </button>
                                                        <button class="like-btn prod-info__like-btn">
                                                            <img
                                                                src="./assets/icons/heart.svg"
                                                                alt=""
                                                                class="like-btn__icon icon"
                                                            />
                                                            <img
                                                                src="./assets/icons/heart-red.svg"
                                                                alt=""
                                                                class="like-btn__icon--liked"
                                                            />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- product content -->
                <div class="product-container">
                    <div class="prod-tab js-tabs">
                        <ul class="prod-tab__list">
                            <li class="prod-tab__item">Thông tin sản phẩm</li>
                        </ul>
                        <div class="prod-tab__contents">
                            <div class="prod-tab__content prod-tab__content--current">
                                <div class="row">
                                    <div class="col-8 col-xl-10 col-lg-12">
                                        <div class="text-content prod-tab__text-content">
                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit <a href="#!"> amet consectetur</a> adipisicing
                                                elit. A voluptatem, vel necessitatibus delectus consectetur praesentium
                                                quod quis, aut mollitia sed, debitis animi nulla assumenda repellat
                                                veritatis? Optio quia expedita quos.
                                            </p>

                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                            <p>
                                                <img
                                                    src="https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/i_Phone_16_Promax_1_0b7addab56.jpg"
                                                    alt=""
                                                    style="margin: 0"
                                                />
                                                <em>Lorem ipsum dolor sit amet consectetur adipisicing elit.</em>
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                            <hr />
                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                            <blockquote>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                                    voluptatem, vel necessitatibus delectus consectetur praesentium quod
                                                    quis, aut mollitia sed, debitis animi nulla assumenda repellat
                                                    veritatis? Optio quia expedita quos.
                                                </p>
                                            </blockquote>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem,
                                                vel necessitatibus delectus consectetur praesentium quod quis, aut
                                                mollitia sed, debitis animi nulla assumenda repellat veritatis? Optio
                                                quia expedita quos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "./templates/footer.html");
        </script>

        <!-- jQuery (Owl Carousel cần jQuery) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            var jq = jQuery.noConflict(); // Đổi alias jQuery thành "jq"
        </script>
        <!-- Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            jq(document).ready(function () {
                var owl = jq(".prod-preview__list").owlCarousel({
                    items: 1, // Hiển thị 1 ảnh lớn tại 1 thời điểm
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    nav: false,
                    dots: false, // Tắt dots mặc định vì ta dùng ảnh nhỏ làm dot
                });

                owl.on("changed.owl.carousel", function (event) {
                    var currentIndex = event.item.index - 2; // Lấy index của item hiện tại
                    var thumbs = jq(".prod-preview__thumb-img");

                    // Đảm bảo index không bị âm do loop
                    if (currentIndex < 0) {
                        currentIndex = thumbs.length - 1;
                    } else if (currentIndex >= thumbs.length) {
                        currentIndex = 0;
                    }

                    // Xóa class active cũ và thêm vào ảnh tương ứng
                    thumbs.removeClass("prod-preview__thumb-img--current");
                    thumbs.eq(currentIndex).addClass("prod-preview__thumb-img--current");
                });

                // Khi click vào ảnh nhỏ, chuyển slide trong Owl Carousel
                jq(".prod-preview__thumb-img").on("click", function () {
                    var index = jq(this).index(); // Lấy index của ảnh nhỏ
                    owl.trigger("to.owl.carousel", [index, 300]); // Chuyển đến slide tương ứng
                });
            });
        </script>
    </body>
</html>
