<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thanh toán | Grocery Mart</title>
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
        <main class="checkout-page">
            <div class="container">
                <!-- search bar -->
                <div class="checkout-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/sreach.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>
                <!-- breadcrumbs -->
                <div class="checkout-container">
                    <!-- breadcrumbs -->
                    <ul class="breadcrumbs checkout-page__breadcrumbs">
                        <li>
                            <a href="./" class="breadcrumbs__link">
                                Home
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Thanh toán</a>
                        </li>
                    </ul>
                </div>
                <!-- checkout content -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-12">
                            <div class="cart-info">
                                <div class="cart-info__list">
                                    <!-- cart item 1 -->
                                    <article class="cart-item">
                                        <a href="./product-detail.html">
                                            <img
                                                src="https://achaumobile.com/wp-content/uploads/2024/09/16-pro-titan-achaum-600x600.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html"> iPhone 16 Pro Max 8GB/256GB </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    32.200.000 | <span class="cart-item__status">Còn Hàng </span>
                                                </p>
                                                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                    <div class="cart-item__input">
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/minus.svg" alt="" class="icon" />
                                                        </button>
                                                        <span>1</span>
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/plus.svg" alt="" class="icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">32.200.000</p>
                                                <div class="cart-item__ctrl">
                                                    <button
                                                        class="cart-item__ctrl-btn js-toggle"
                                                        toggle-target="#delete-confirm"
                                                    >
                                                        <img src="./assets/icons/trash.svg" alt="" />
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- cart item 2 -->
                                    <article class="cart-item">
                                        <a href="./product-detail.html">
                                            <img
                                                src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_navy_1_13310ba5fb.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html">
                                                        Samsung Galaxy S25 5G 12GB 256GB
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    18.990.000 | <span class="cart-item__status">Còn Hàng </span>
                                                </p>
                                                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                    <div class="cart-item__input">
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/minus.svg" alt="" class="icon" />
                                                        </button>
                                                        <span>1</span>
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/plus.svg" alt="" class="icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">18.990.000</p>
                                                <div class="cart-item__ctrl">
                                                    <button
                                                        class="cart-item__ctrl-btn js-toggle"
                                                        toggle-target="#delete-confirm"
                                                    >
                                                        <img src="./assets/icons/trash.svg" alt="" />
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- cart item 3 -->
                                    <article class="cart-item">
                                        <a href="./product-detail.html">
                                            <img
                                                src="https://cdn2.fptshop.com.vn/unsafe/384x0/filters:quality(100)/galaxy_s25_ultra_titan_silver_blue_1_8225f9e1f4.png"
                                                alt=""
                                                class="cart-item__thumb"
                                            />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="./product-detail.html">
                                                        Samsung Galaxy S25 Ultra 5G 12GB
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    29.990.000 | <span class="cart-item__status">Còn Hàng </span>
                                                </p>
                                                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                    <div class="cart-item__input">
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/minus.svg" alt="" class="icon" />
                                                        </button>
                                                        <span>1</span>
                                                        <button class="cart-item__input-btn">
                                                            <img src="./assets/icons/plus.svg" alt="" class="icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">29.990.000</p>
                                                <div class="cart-item__ctrl">
                                                    <button
                                                        class="cart-item__ctrl-btn js-toggle"
                                                        toggle-target="#delete-confirm"
                                                    >
                                                        <img src="./assets/icons/trash.svg" alt="" />
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cart-info__bottom d-xl-none">
                                    <div class="col-8 col-xxl-7">
                                        <div class="cart-info__continue">
                                            <a href="./" class="cart-info__continue-link">
                                                <img
                                                    src="./assets/icons/arrow-down-2.svg"
                                                    alt=""
                                                    class="cart-info__continue-icon icon"
                                                />
                                                Tiếp tục mua sắm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-xl-12">
                            <div class="cart-info">
                                <div class="cart-info__row">
                                    <span>Số lượng </span>
                                    <span>3</span>
                                </div>
                                <div class="cart-info__row">
                                    <span>Tạm tính</span>
                                    <span>80,980,000</span>
                                </div>
                                <div class="cart-info__row">
                                    <span>Vận Chuyển</span>
                                    <span>Miễn phí</span>
                                </div>
                                <div class="cart-info__separate"></div>
                                <div class="cart-info__row cart-info__row">
                                    <span>Thành tiền</span>
                                    <span>80,980,000</span>
                                </div>
                                <a href="./shipping.html" class="btn btn--primary btn--rounded cart-info__next-btn">
                                    Thanh toán
                                </a>
                            </div>
                            <!-- <div class="cart-info">
                                <a href="#!">
                                    <article class="gift-item">
                                        <div class="gift-item__icon-wrap">
                                            <img src="./assets/icons/gift.svg" alt="" class="gift-item__icon" />
                                        </div>
                                        <div class="gift-item__content">
                                            <h3 class="gift-item__title">Send this order as a gift.</h3>
                                            <p class="gift-item__desc">
                                                Available items will be shipped to your gift recipient.
                                            </p>
                                        </div>
                                    </article>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "./templates/footer.html");
        </script>

        <!-- modal -->
        <div id="delete-confirm" class="modal modal--small hide">
            <div class="modal__content">
                <div class="modal__text">Bạn có muốn xóa sản phẩm này ra khỏi giỏ hàng?</div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-confirm">
                        Hủy
                    </button>
                    <button class="btn btn--small btn--danger modal__btn btn--no-margin">Xóa</button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
        </div>
    </body>
</html>
