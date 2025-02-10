<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thông tin địa chỉ | Grocery Mart</title>
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
                    <div class="row gy-md-2">
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
                                            <a href="#!" class="profile-menu__link">
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
                            <div class="user-address cart-info">
                                <div class="user-address__top">
                                    <div>
                                        <h2 class="user-address__title">Địa chỉ</h2>
                                        <p class="user-address__desc">Bạn mới đơn hàng được giao tới đâu?</p>
                                    </div>
                                    <button
                                        class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                                        toggle-target="#add-new-address"
                                    >
                                        <img src="./assets/icons/plus.svg" alt="" class="icon" />
                                        Thêm địa chỉ mới
                                    </button>
                                </div>
                                <div class="user-address__list">
                                    <!-- empty message -->
                                    <!-- <p class="user-address__message">
                                    Chưa có địa chỉ
                                    <a
                                        href="#!"
                                        class="user-address__link js-toggle"
                                        toggle-target="#add-new-address"
                                    >
                                        Thêm địa chỉ mới</a
                                    >
                                </p> -->

                                    <!-- address card 1 -->
                                    <article class="address-card">
                                        <div class="address-card__left">
                                            <div class="address-card__choose">
                                                <label class="cart-info__checkbox">
                                                    <input
                                                        type="radio"
                                                        name="shipping-address"
                                                        checked
                                                        class="cart-info__checkbox-input"
                                                    />
                                                </label>
                                            </div>
                                            <div class="address-card__info">
                                                <h3 class="address-card__title">Phạm Trọng Nhân</h3>
                                                <p class="address-card__desc">
                                                    624 Đường Âu Cơ Quận Tân Bình Thành Phố Hồ Chí Minh
                                                </p>
                                                <!-- <ul class="address-card__list">
                                                <li class="address-card__list-item">Shipping</li>
                                                <li class="address-card__list-item">Delivery from store</li>
                                            </ul> -->
                                            </div>
                                        </div>
                                        <div class="address-card__right">
                                            <div class="address-card__ctrl">
                                                <button
                                                    class="cart-info__edit-btn js-toggle"
                                                    toggle-target="#add-new-address"
                                                >
                                                    <img src="./assets/icons/edit.svg" alt="" class="icon" />
                                                    Chỉnh sửa
                                                </button>
                                            </div>
                                        </div>
                                    </article>

                                    <!-- address card 2 -->
                                    <article class="address-card">
                                        <div class="address-card__left">
                                            <div class="address-card__choose">
                                                <label class="cart-info__checkbox">
                                                    <input
                                                        type="radio"
                                                        name="shipping-address"
                                                        class="cart-info__checkbox-input"
                                                    />
                                                </label>
                                            </div>
                                            <div class="address-card__info">
                                                <h3 class="address-card__title">Phạm Trọng Nhân</h3>
                                                <p class="address-card__desc">
                                                    613 Đường Âu Cơ Quận Tân Bình Thành Phố Hồ Chí Minh
                                                </p>
                                                <!-- <ul class="address-card__list">
                                                <li class="address-card__list-item">Shipping</li>
                                                <li class="address-card__list-item">Delivery from store</li>
                                            </ul> -->
                                            </div>
                                        </div>
                                        <div class="address-card__right">
                                            <div class="address-card__ctrl">
                                                <button
                                                    class="cart-info__edit-btn js-toggle"
                                                    toggle-target="#add-new-address"
                                                >
                                                    <img src="./assets/icons/edit.svg" alt="" class="icon" />
                                                    Chỉnh sửa
                                                </button>
                                            </div>
                                        </div>
                                    </article>
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
        <!-- Modal: confirm new shipping address   -->
        <div id="add-new-address" class="modal hide" style="--content-width: 650px">
            <div class="modal__content">
                <form action="" class="form" autocomplete="off">
                    <h2 class="modal__heading">Thêm địa chỉ mới</h2>
                    <div class="modal__body">
                        <div class="form__row">
                            <div class="form__group">
                                <label for="name" class="form__label form__label--small">Họ và tên </label>
                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Họ và tên"
                                        class="form__input"
                                        required
                                        minlength="2"
                                    />
                                    <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Vui lòng nhập ít nhất 2 kí tự</p>
                            </div>
                            <div class="form__group">
                                <label for="phone" class="form__label form__label--small">Số điện thoại</label>

                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        placeholder="Số điện thoại"
                                        class="form__input"
                                        required
                                        minlength="10"
                                    />
                                    <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Vui lòng nhập đủ 10 số</p>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="address" class="form__label form__label--small">Địa chỉ</label>

                            <div class="form__text-area">
                                <textarea
                                    name="address"
                                    id="address"
                                    placeholder="Address (Area and street)"
                                    class="form__text-area-input"
                                    required
                                ></textarea>
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Địa chỉ không được trống</p>
                        </div>
                        <div class="form__group">
                            <label for="city" class="form__label form__label--small"
                                >Tên Đường / Quận / Thành Phố</label
                            >
                            <div class="form__text-input form__text-input--small">
                                <input
                                    type="text"
                                    name=""
                                    id="city"
                                    placeholder="City/District/Town"
                                    class="form__input js-toggle"
                                    toggle-target="#city-dialog"
                                    readonly
                                    required
                                />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                                <div id="city-dialog" class="form__select-dialog hide">
                                    <h2 class="form__dialog-heading d-none d-sm-block">City/District/Town</h2>
                                    <button
                                        class="form__close--dialog d-none d-sm-block js-toggle"
                                        toggle-target="#city-dialog"
                                    >
                                        &times;
                                    </button>
                                    <div class="form__search">
                                        <input type="text" placeholder="Search" class="form__search-input" />
                                        <img src="./assets/icons/sreach.svg" alt="" class="form__search-icon icon" />
                                    </div>
                                    <ul class="form__options-list">
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option form__option--current">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Long An</li>
                                        <li class="form__option">Thanh Hoa</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Long An</li>
                                        <li class="form__option">Thanh Hoa</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Long An</li>
                                        <li class="form__option">Thanh Hoa</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Long An</li>
                                        <li class="form__option">Thanh Hoa</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="form__error">Địa chỉ không hợp lệ</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" id="" name="" class="form__checkbox-input" hidden />
                                <span class="form__checkbox-label">Đặt làm mặc định</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__bottom">
                        <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                            Hủy
                        </button>
                        <button class="btn btn--small btn--primary modal__btn btn--no-margin">Tạo</button>
                    </div>
                </form>
            </div>
            <div class="modal__overlay"></div>
        </div>
    </body>
</html>
