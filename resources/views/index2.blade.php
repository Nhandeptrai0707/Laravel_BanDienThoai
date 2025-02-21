<!DOCTYPE html>
<html lang="en" class="">
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
            load("#header", "./templates/header.html");
        </script>

        <main class="container home">
            <div class="home__container">
                <!-- slide show -->
                <div class="slideshow">
                    <div class="slideshow__inner owl-carousel">
                        <div class="slideshow__item">
                            <a href="#!" class="slideshow__link">
                                <img
                                    src="https://cdn.hoanghamobile.com/i/home/Uploads/2025/02/03/pre-order-s25-web.png"
                                    alt=""
                                    class="slideshow__img"
                                />
                            </a>
                        </div>

                        <div class="slideshow__item">
                            <a href="#!" class="slideshow__link">
                                <img
                                    src="https://cdn.hoanghamobile.com/i/home/Uploads/2025/01/24/banner-iphone-16-series-1200x375-4.png"
                                    alt=""
                                    class="slideshow__img"
                                />
                            </a>
                        </div>
                        <div class="slideshow__item">
                            <a href="#!" class="slideshow__link">
                                <img
                                    src="https://cdn.hoanghamobile.com/i/home/Uploads/2025/01/10/honor-x5b-1200x375.jpg"
                                    alt=""
                                    class="slideshow__img"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse Product -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Bán Chạy</h2>
                    <div class="filter-wrap">
                        <button class="filter-btn js-toggle" toggle-target="#home-filter">
                            Lọc <img src="./assets/icons/filter.svg" alt="" class="filter-btn__icon icon" />
                        </button>

                        <div id="home-filter" class="filter hide">
                            <img src="./assets/icons/arrow-up.png" alt="" class="filter__arrow" />
                            <h3 class="filter__heading">Lọc Sản Phẩm</h3>
                            <form action="" class="filter__form form">
                                <div class="filter__row filter__content">
                                    <!-- filter column 1 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Giá</label>
                                        <div class="filter__form-group">
                                            <div
                                                class="filter__form-slider"
                                                style="--min-value: 10%; --max-value: 70%"
                                            ></div>
                                        </div>
                                        <div class="filter__form-group filter__form-group--inline">
                                            <div>
                                                <label for="filter__form-input" class="form__label form__label--small"
                                                    >Minimum</label
                                                >
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id="minPrice"
                                                        value="0"
                                                        class="filter__form-input"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="filter__form-input-2" class="form__label form__label--small"
                                                    >Maximum</label
                                                >
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id="maxPrice"
                                                        value="7,000,000"
                                                        class="filter__form-input"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter__separate"></div>

                                    <!-- filter column 3 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Sản Phẩm</label>
                                        <div class="filter__form-group">
                                            <div class="filter__form-text-input">
                                                <input
                                                    type="text"
                                                    name=""
                                                    id=""
                                                    placeholder="Nhập tên sản phẩm"
                                                    class="filter__form-input"
                                                />
                                                <img
                                                    src="./assets/icons/sreach.svg"
                                                    alt=""
                                                    class="filter__form-input-icon icon"
                                                />
                                            </div>
                                        </div>
                                        <div class="filter__form-group">
                                            <div class="form__tags">
                                                <button class="form__tag">iPhone</button>
                                                <button class="form__tag">iPads</button>
                                                <button class="form__tag">SamSung</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__row filter__footer">
                                    <button class="btn btn--text filter__cancel js-toggle" toggle-target="#home-filter">
                                        Hủy
                                    </button>
                                    <button class="btn btn--primary filter__submit">Hiển thị kết quả</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3">
                    <!-- Product card 1 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://achaumobile.com/wp-content/uploads/2024/09/16-pro-titan-achaum-600x600.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 16 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">32.200.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 2 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://lebaostore.com/wp-content/uploads/2023/09/iphone-15-pro-max-black-thumbtz-650x650.png.webp"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 15 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">21.290.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 3 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://lebaostore.com/wp-content/uploads/2022/09/iPhone-14-Pro-series-2-650x650-1.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 14 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">27.290.000 </span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">5.0</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 4 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_navy_1_13310ba5fb.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">Samsung Galaxy S25 5G 12GB 256GB </a>
                            </h3>
                            <p class="product-card__brand">SamSung</p>
                            <div class="product-card__row">
                                <span class="product-card__price">18.990.000 </span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.4</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 5 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_ultra_titan_silver_blue_1_8225f9e1f4.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">Samsung Galaxy S25 Ultra 5G 12GB 256GB</a>
                            </h3>
                            <p class="product-card__brand">SamSung</p>
                            <div class="product-card__row">
                                <span class="product-card__price">29.990.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 6 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://lebaostore.com/wp-content/uploads/2022/09/iPhone-14-Pro-series-2-650x650-1.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn like-btn--liked product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 14 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">27.290.000 </span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">5.0</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 7 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_ultra_titan_silver_blue_1_8225f9e1f4.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">Samsung Galaxy S25 Ultra 5G 12GB 256GB</a>
                            </h3>
                            <p class="product-card__brand">SamSung</p>
                            <div class="product-card__row">
                                <span class="product-card__price">29.990.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 8 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://achaumobile.com/wp-content/uploads/2024/09/16-pro-titan-achaum-600x600.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 16 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">32.200.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 9 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://lebaostore.com/wp-content/uploads/2023/09/iphone-15-pro-max-black-thumbtz-650x650.png.webp"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">iPhone 15 Pro Max 8GB/256GB</a>
                            </h3>
                            <p class="product-card__brand">Apple</p>
                            <div class="product-card__row">
                                <span class="product-card__price">21.290.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>
                    <!-- Product card 10 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="./product-detail.html">
                                    <img
                                        src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_ultra_titan_silver_blue_1_8225f9e1f4.png"
                                        alt=""
                                        class="product-card__thumb"
                                    />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>

                            <h3 class="product-card__title">
                                <a href="./product-detail.html">Samsung Galaxy S25 Ultra 5G 12GB 256GB</a>
                            </h3>
                            <p class="product-card__brand">SamSung</p>
                            <div class="product-card__row">
                                <span class="product-card__price">29.990.000</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div style="text-align: center"><a href="./product.html" class="home__cta">Xem thêm &gt;</a></div>
            </section>
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
                jq(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: true, // Lặp vô hạn
                    autoplay: true, // Tự động chuyển slide
                    autoplayTimeout: 1700, // Thời gian chuyển slide (3 giây)
                    autoplayHoverPause: true, // Tạm dừng khi di chuột vào
                    nav: false, // Hiển thị nút điều hướng (next/prev)
                    dots: false, // Hiển thị dots điều hướng
                });
            });
        </script>
    </body>
</html>
