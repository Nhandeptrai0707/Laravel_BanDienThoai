<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create New Password</title>
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
                <img src="./assets/img/auth/reset-password.svg" alt="" class="auth__intro-img" style="--width: 424px" />
            </div>
            <section class="auth__content">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="#!" class="logo">
                        <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h2 class="logo__title">grocerymart</h2>
                    </a>
                    <h1 class="auth__heading">Create new password</h1>
                    <p class="auth__desc">At least 6 characters, with uppercase a lowercase letter.</p>

                    <form action="./sign-in.html" class="form auth__form auth__form-forgot" autocomplete="off">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name=""
                                    id=""
                                    placeholder="New Password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon icon" />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password is not in correct format</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name=""
                                    id=""
                                    placeholder="Confirm New Password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon icon" />
                                <img src="./assets/icons/error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Password is not in correct format</p>
                        </div>

                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn-su form__submit-btn">Reset Password</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
