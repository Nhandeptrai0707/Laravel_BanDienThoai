<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng Nhập</title>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />
        <link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/font/stylesheet.css') }}" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <!-- Scripts -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </head>
    <body>
        <main class="auth">
            <div class="auth__intro d-md-none">
                <img src="{{ asset('assets/img/auth/intro2.svg') }}" alt="" class="auth__intro-img" style="--width: 470px" />
                <p class="auth__intro-text">Chất lượng vượt trội, giá cả phải chăng - Lựa chọn hoàn hảo cho bạn.</p>
            </div>
            <section class="auth__content">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="#!" class="logo">
                        <img src="{{ asset('assets/icons/logo.svg') }}" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">Bão Táp</h2>
                    </a>
                    <h1 class="auth__heading">Đăng Nhập</h1>
                    <p class="auth__desc">
                        Xin chào! Rất vui được đón tiếp bạn trở lại. Đăng nhập để nhận những ưu đãi mới nhất của
                        chúng tôi
                    </p>
                    <form action="{{ route('login') }}" method="POST" class="form auth__form" autocomplete="off">
                        @csrf
                    
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="{{ asset('assets/icons/mail.svg') }}" alt="" class="form__input-icon icon" />
                                <img src="{{ asset('assets/icons/error.svg') }}" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Email chưa đúng định dạng</p>
                        </div>
                    
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name="password"
                                    placeholder="Mật khẩu"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="{{ asset('assets/icons/lock.svg') }}" alt="" class="form__input-icon icon" />
                                <img src="{{ asset('assets/icons/error.svg') }}" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password chưa đúng định dạng</p>
                        </div>
                    
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="remember" class="form__checkbox-input" hidden />
                                <span class="form__checkbox-label">Đặt làm mặc định</span>
                            </label>
                            <a href="{{ url('/reset-password') }}" class="auth__link form__pull-right"> Quên mật khẩu </a>
                        </div>
                    
                        <div class="form__group auth__btn-group">
                            <button type="submit" class="btn btn--primary auth__btn-su form__submit-btn">Đăng nhập</button>
                            <button class="btn btn--outline auth__btn">
                                <img src="./assets/icons/gg.svg" alt="" class="btn-icon" />
                                Đăng nhập bằng Google
                            </button>
                        </div>
                    </form>

                    <p class="auth__text">
                        Bạn chưa có tài khoản?
                        <a {{-- href="{{ route('register') }}" --}} class="auth__link" style="font-size: inherit">Đăng ký</a>
                    </p>
                </div>
            </section>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
