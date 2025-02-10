<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng Ký</title>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
        <link rel="manifest" href="./assets/favicon/site.webmanifest" />
        <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />
        <!-- Fonts -->
        <link rel="stylesheet" href="./assets/font/stylesheet.css" />
        <!-- Styles -->
        <link rel="stylesheet" href="./assets/css/main.css" />
        <!-- Scripts -->
        <script src="./assets/js/scripts.js"></script>
    </head>
    <body>
        <main class="auth">
            <div class="auth__intro">
                <!-- Logo -->
                <a href="#!" class="logo auth__intro-logo d-none d-md-flex">
                    <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                    <h2 class="logo__title">grocerymart</h2>
                </a>
                <img src="./assets/img/auth/intro2.svg" alt="" class="auth__intro-img" style="--width: 470px" />
                <p class="auth__intro-text">Chất lượng vượt trội, giá cả phải chăng - Lựa chọn hoàn hảo cho bạn.</p>
                <button class="auth__intro-next d-none d-md-block js-toggle" toggle-target="#auth-content">
                    <img src="./assets/img/auth/intro-arrow.svg" alt="" />
                </button>
            </div>
            <section id="auth-content" class="auth__content hide">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="#!" class="logo">
                        <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart</h2>
                    </a>
                    <h1 class="auth__heading">Đăng Ký</h1>
                    <p class="auth__desc">Tạo tài khoản để mua sắm những sản phẩm chất lượng với giá cả phải chăng</p>
                    <form action="./index-logined.html" class="form auth__form" autocomplete="off">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    name=""
                                    id=""
                                    placeholder="Email"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/mail.svg" alt="" class="form__input-icon icon" />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Email chưa đúng định dạng</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name=""
                                    id=""
                                    placeholder="Mật khẩu"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon icon" />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password chưa đúng định dạng</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name=""
                                    id=""
                                    placeholder="Nhập lại mật khẩu"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon icon" />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password chưa đúng định dạng</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" id="" name="" class="form__checkbox-input" hidden />
                                <span class="form__checkbox-label">Đặt làm mặc định </span>
                            </label>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn-su form__submit-btn">Đăng ký</button>
                            <button class="btn btn--outline auth__btn">
                                <img src="./assets/icons/gg.svg" alt="" class="btn-icon" />
                                Đăng ký bằng Google
                            </button>
                        </div>
                    </form>
                    <p class="auth__text">
                        Bạn đã có tài khoản?
                        <a href="./sign-in.html" class="auth__link" style="font-size: inherit">Đăng nhập</a>
                    </p>
                </div>
            </section>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
