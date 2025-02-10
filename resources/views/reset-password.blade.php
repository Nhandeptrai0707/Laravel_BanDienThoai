<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Quên Mật Khẩu</title>
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
            <div class="auth__intro d-md-none">
                <img
                    src="./assets/img/auth/forgot-password.png"
                    alt=""
                    class="auth__intro-img"
                    style="--width: 424px"
                />
            </div>
            <section class="auth__content">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="#!" class="logo">
                        <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart</h2>
                    </a>
                    <h1 class="auth__heading">Bạn quên mật khẩu ?</h1>
                    <p class="auth__desc">Nhập thông tin Email của bạn chúng tôi sẽ hỗ trợ ngay lập tức</p>
                    <div class="message message--success auth__message">
                        Chúng tôi đã gửi liên kết đặt lại mật khẩu của bạn qua Email
                    </div>
                    <form
                        action="./reset-password-emailed.html"
                        class="form auth__form auth__form-forgot"
                        autocomplete="off"
                    >
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

                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn-su form__submit-btn">Đặt lại mật khẩu</button>
                        </div>
                    </form>
                    <p class="auth__text">
                        <a href="./sign-in.html" class="auth__link" style="font-size: inherit">Quay lại đăng nhập</a>
                    </p>
                </div>
            </section>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
