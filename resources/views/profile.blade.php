<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hồ sơ | Grocery Mart</title>
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
        <main class="profile">
            <div class="container">
                <!-- search bar -->
                <div class="profile-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/sreach.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- profile content -->
                <div class="profile-container">
                    <div class="row gy-md-3">
                        <div class="col-3 col-xl-4 col-lg-5 col-md-12">
                            <aside class="profile__sidebar">
                                <div class="profile-user">
                                    <img src="./assets/img/user.jpg" alt="" class="profile-user__avatar" />
                                    <h1 class="profile-user__name">Trọng Nhân</h1>
                                    <p class="profile-user__desc">Ngày sinh 1/1/2000</p>
                                </div>
                                <!-- menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Quản Lý Tài Khoản</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./edit-personal-info.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/profile.svg" alt="" class="icon" />
                                                </span>
                                                Thông tin cá nhân
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./edit-address-info.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/address.svg" alt="" class="icon" />
                                                </span>
                                                Địa chỉ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/gift-small.svg" alt="" class="icon" />
                                                </span>
                                                Ưu đãi
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Hỗ trợ</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger.svg" alt="" class="icon" />
                                                </span>
                                                Trung tâm trợ giúp
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger-crircle.svg" alt="" class="icon" />
                                                </span>
                                                Điều khoản
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-9 col-xl-8 col-lg-7 col-md-12">
                            <div class="cart-info">
                                <div class="row gy-3">
                                    <!-- Account info -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Thông tin tài khoản</h2>
                                        <p class="cart-info__desc profile__desc">
                                            Địa chỉ, thông tin liên lạc và mật khẩu
                                        </p>
                                        <div class="row row-cols-2 row-cols-lg-1 gy-md-2">
                                            <!-- Account info 1 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/mail.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Địa chỉ Email</h3>
                                                            <p class="account-info__desc">trongnhan172@gmail.com</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Account info 2 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/calling.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Số điện thoại</h3>
                                                            <p class="account-info__desc">112 2345 657</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Account info 3 -->
                                            <div class="col-6">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/address.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Địa chỉ</h3>
                                                            <p class="account-info__desc">
                                                                624 Đường Âu Cơ Quận Tân Bình Thành Phố Hồ Chí Minh
                                                            </p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>
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
    </body>
</html>
