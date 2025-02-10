<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add new card | Grocery Mart</title>
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
                                    <h1 class="profile-user__name">Imran Khan</h1>
                                    <p class="profile-user__desc">Registered: 17th May 2022</p>
                                </div>
                                <!-- menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Manage Account</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./edit-personal-info.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/profile.svg" alt="" class="icon" />
                                                </span>
                                                Personal info
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/address.svg" alt="" class="icon" />
                                                </span>
                                                Addresses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/mail.svg" alt="" class="icon" />
                                                </span>
                                                Communications & privacy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">My items</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/download.svg" alt="" class="icon" />
                                                </span>
                                                Reorder
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./favourite.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/heart.svg" alt="" class="icon" />
                                                </span>
                                                Favourite
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/gift-small.svg" alt="" class="icon" />
                                                </span>
                                                Registries
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu 3 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Subscriptions & plans</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/shield.svg" alt="" class="icon" />
                                                </span>
                                                Reorder
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu 4 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Customer Service</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger.svg" alt="" class="icon" />
                                                </span>
                                                Help
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger-crircle.svg" alt="" class="icon" />
                                                </span>
                                                Terms of Use
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
                                            Add credit or debit card
                                        </h2>
                                        <form action="./profile.html" class="form form-card">
                                            <!-- form row 1 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="fist-name" class="form__label form__label--medium">
                                                        Fist Name
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="fist-name"
                                                            placeholder="Fist Name"
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
                                                    <p class="form__error">First Name is not in correct format</p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="last-name" class="form__label form__label--medium">
                                                        Last Name
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="last-name"
                                                            placeholder="Last Name"
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
                                                    <p class="form__error">Last Name is not in correct format</p>
                                                </div>
                                            </div>
                                            <!-- form row 2 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="card-number" class="form__label form__label--medium">
                                                        Card Number
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="card-number"
                                                            placeholder="Card Number"
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
                                                    <p class="form__error">Card Number is not in correct format</p>
                                                </div>
                                                <div class="form__group">
                                                    <label
                                                        for="expiration-date"
                                                        class="form__label form__label--medium"
                                                    >
                                                        Expiration Date
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="expiration-date"
                                                            placeholder="Expiration Date"
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
                                                    <p class="form__error">Expiration Date is not in correct format</p>
                                                </div>
                                            </div>
                                            <!-- form row 3 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="card-ccv" class="form__label form__label--medium">
                                                        CVV
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="card-ccv"
                                                            placeholder="123"
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
                                                    <p class="form__error">CVV is not in correct format</p>
                                                </div>
                                                <div class="form__group">
                                                    <label
                                                        for="   phone-number"
                                                        class="form__label form__label--medium"
                                                    >
                                                        Phone Number
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id="   phone-number"
                                                            placeholder="017"
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
                                                    <p class="form__error">Phone Number is not in correct format</p>
                                                </div>
                                            </div>

                                            <div class="form__group">
                                                <label for="set-as-default" class="form__label form__label--medium">
                                                    Card Preferences
                                                </label>
                                                <label class="form__checkbox">
                                                    <input
                                                        type="checkbox"
                                                        id="set-as-default"
                                                        name=""
                                                        class="form__checkbox-input"
                                                        hidden
                                                    />
                                                    <span class="form__checkbox-label">Set as default card </span>
                                                </label>
                                            </div>
                                            <div class="form-card__bottom">
                                                <a href="./profile.html" class="btn btn--text form-card__text-bold">
                                                    Cancel
                                                </a>
                                                <button class="btn btn--primary">Save Card</button>
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

        <!-- modal -->
        <div id="delete-confirm" class="modal modal--small hide">
            <div class="modal__content">
                <div class="modal__text">Do you want to remove this item from shopping cart?</div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-confirm">
                        Cancel
                    </button>
                    <button class="btn btn--small btn--danger modal__btn btn--no-margin">Delete</button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
        </div>
    </body>
</html>
