<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thông tin cá nhân | Grocery Mart</title>
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
                        <div class="col-3 col-xl-4 d-lg-none">
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
                        <div class="col-9 col-xl-8 col-lg-12">
                            <div class="cart-info">
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <h2 class="cart-info__heading cart-info__heading--lv2">
                                            <a href="./profile.html">
                                                <img
                                                    src="./assets/icons/arrow-left.svg"
                                                    alt=""
                                                    class="icon cart-info__back-arrow"
                                                />
                                            </a>
                                            Thông tin cá nhân
                                        </h2>
                                        <form action="./profile.html" class="form form-card">
                                            <!-- form row 1 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="full-name" class="form__label form__label--medium">
                                                        Họ và tên
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="full-name"
                                                            placeholder="Họ và tên"
                                                            class="form__input"
                                                            required
                                                            minlength="6"
                                                            autofocus
                                                        />

                                                        <img
                                                            src="./assets/icons/error.svg"
                                                            alt=""
                                                            class="form__input-icon-error"
                                                        />
                                                    </div>
                                                    <p class="form__error">Họ và tên không hợp lệ</p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="email-address" class="form__label form__label--medium">
                                                        Email
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="email"
                                                            name=""
                                                            id="email-address"
                                                            placeholder="Email"
                                                            class="form__input"
                                                            required
                                                            minlength="6"
                                                        />

                                                        <img
                                                            src="./assets/icons/error.svg"
                                                            alt=""
                                                            class="form__input-icon-error"
                                                        />
                                                    </div>
                                                    <p class="form__error">Email không hợp lệ</p>
                                                </div>
                                            </div>
                                            <!-- form row 2 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="phone-number" class="form__label form__label--medium">
                                                        Số điện thoại
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="tel"
                                                            name=""
                                                            id="phone-number"
                                                            placeholder="Số điện thoại"
                                                            class="form__input"
                                                            required
                                                            minlength="10"
                                                        />

                                                        <img
                                                            src="./assets/icons/error.svg"
                                                            alt=""
                                                            class="form__input-icon-error"
                                                        />
                                                    </div>
                                                    <p class="form__error">Số điện thoại phải đủ 10 số</p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="password" class="form__label form__label--medium">
                                                        Mật khẩu
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="password"
                                                            placeholder="mật khẩu"
                                                            class="form__input"
                                                            required
                                                            minlength="6"
                                                        />

                                                        <img
                                                            src="./assets/icons/error.svg"
                                                            alt=""
                                                            class="form__input-icon-error"
                                                        />
                                                    </div>
                                                    <p class="form__error">Password Date is not in correct format</p>
                                                </div>
                                            </div>

                                            <div class="form-card__bottom">
                                                <a href="./profile.html" class="btn btn--text form-card__text-bold">
                                                    Hủy
                                                </a>
                                                <button class="btn btn--primary">Lưu</button>
                                            </div>
                                        </form>
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
