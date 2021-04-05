<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Отдел новостей</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="navbar">
                <a href="index.html" class="main-logo"><img src="img/Logo.svg" alt="Logo: Ehya" class="logo"></a>
                <div class="navbar__wrapper">
                    <ul class="navbar__menu">
                        <li class="navbar__item"><a href="#" class="navbar__link">Домой</a></li>
                        <li class="navbar__item dropdown-item"><a href="#" class="navbar__link dropdown-link">Лендинги</a>
                            <ul class="navbar-dropdown">
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Лендинг
                                        №1</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Лендинг
                                        №2</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Лендинг
                                        №3</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Лендинг
                                        №4</a></li>
                            </ul>
                        </li>
                        <li class="navbar__item dropdown-item"><a href="#" class="navbar__link dropdown-link">Страницы</a>
                            <ul class="navbar-dropdown">
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Страница
                                        №1</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Страница
                                        №2</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Страница
                                        №3</a></li>
                                <li class="navbar-dropdown__item"><a href="#" class="navbar-dropdown__link">Страница
                                        №4</a></li>
                            </ul>
                        </li>
                        <li class="navbar__item"><a href="#" class="navbar__link">Помощь</a></li>
                    </ul>
                    <button class="navbar__form-button modal-open-btn">Получить</button>
                </div>
                <!-- /.navbar__wrapper -->
                <button class="mobile-menu-open-btn">
                    <span class="open-btn-item"></span>
                    <span class="open-btn-item"></span>
                    <span class="open-btn-item"></span>
                </button>
                <!-- /.mobile-menu-open-btn -->
            </div>
            <div class="main-screen">
                <h1 class="main-title">
                    <?php
                    if ($_GET['type'] == 'message') echo 'Ваш запрос отправлен!';
                    else echo 'Получите наши истории на ваш почтовый ящик еженедельно!'
                    ?></h1>
                <div class="search-wrapper thankyou-wrapper">
                    <h2 class="review__title thankyou-title">
                        <?php
                        if ($_GET['type'] == 'message') echo 'Спасибо за подписку!';
                        ?>
                    </h2>
                    <a href="index.html" class="button return-button">
                        На главную
                        <img src="img/button-arrow.svg" alt="Icon: Arrow" class="button__arrow">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- /.header -->

    <div class="wave">
        <img src="img/Wave.svg" alt="wave" class="wave__img">
    </div>
    <section class="review">
        <div class="container">
            <div class="review-wrapper">
                <div class="review-form">
                    <h2 class="review__title">Получите наши истории на ваш почтовый ящик еженедельно</h2>
                    <form action="send.php" method="POST" class="subscribe review__subscribe valid-mail-form">
                        <input type="email" name="email" class="subscribe__input" placeholder="Ваш email" required>
                        <button class="button subscribe__button">
                            Начать
                        </button>
                    </form>
                    <p class="review__subtitle">Получите ответ завтра, если отправите его до 9 вечера сегодня. Если
                        мы получили после 9 вечера, мы получим ответ на
                        следующий день.</p>
                </div>
                <!-- /.review-form -->
                <div class="review-info">
                    <div class="review-card">
                        <img src="img/review-img.png" alt="Image: gamepad" class="review-card__img">
                        <div class="review-card__wrapper">
                            <h4 class="review-card__title">Лучшие статьи каждую неделю</h4>
                            <span class="review-card__subtitle">Наши предложения по страхованию<br> везде
                                одинаковы.</span>
                        </div>
                    </div>
                </div>
                <!-- /.review-info -->
            </div>
            <!-- /.review-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.review -->

    <footer class="footer">
        <div class="container footer__container">
            <hr>
            <div class="footer__wrapper">
                <div class="footer__info">
                    <div class="footer__logo">
                        <a href="index.html" class="footer__logo-link">
                            <img src="img/Logo.svg" alt="Logo" class="footer__logo-img">
                        </a>
                    </div>
                    <p class="footer__text">Создайте современный и креативный веб-сайт с crealand</p>
                    <div class="footer__socials">
                        <a href="https://www.google.com/" target="blank" class="footer__socials-link">
                            <img src="img/google.svg" alt="Icon: Google" class="icon footer__socials-icon">
                        </a>
                        <a href="https://twitter.com/" target="blank" class="footer__socials-link">
                            <img src="img/twitter.svg" alt="Icon: Twitter" class="icon footer__socials-icon">
                        </a>
                        <a href="https://www.instagram.com/" target="blank" class="footer__socials-link">
                            <img src="img/instagram.svg" alt="Icon: Instagram" class="icon footer__socials-icon">
                        </a>
                        <a href="https://www.linkedin.com/" target="blank" class="footer__socials-link">
                            <img src="img/linkedin.svg" alt="Icon: Linkedin" class="icon footer__socials-icon">
                        </a>
                        <a href="https://www.youtube.com/" target="blank" class="footer__socials-link">
                            <img src="img/youtube.svg" alt="Icon: Youtube" class="icon footer__socials-icon">
                        </a>
                    </div>
                    <!-- /.footer__socials -->
                </div>
                <!-- /.footer__info -->
                <nav class="footer__menu">
                    <div class="footer__menu-item">
                        <h4 class="footer__list-title">Продукт</h4>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Лендинг</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Функции</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Документация</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Скидки</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Расценки</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer__menu-item -->
                    <div class="footer__menu-item">
                        <h4 class="footer__list-title">Сервисы</h4>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Документация</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Дизайн</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Темы</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Иллюстрации</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">UI Kit</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer__menu-item -->
                    <div class="footer__menu-item">
                        <h4 class="footer__list-title">Компания</h4>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">О нас</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Условия</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link"><span class="mb-hide">Политика<br>
                                        конфиденциальности</span><span class="mb-visible">Privacy Policy</span></a>
                            </li>
                            <li class="footer__item footer__spitem">
                                <a href="#" class="footer__link">Careers</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer__menu-item -->
                    <div class="footer__menu-item">
                        <h4 class="footer__list-title"><span class="mb-hide">Более</span><span class="mb-visible">Ещё...</span></h4>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Документация</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Лицензия</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Измененния</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.footer__menu-item -->
                </nav>
            </div>
            <!-- /.footer__wrapper -->
            <div class="footer__copyright">
                <div class="footer__like">
                    <img src="img/heart.svg" alt="Heart" class="footer__like-img">
                </div>
                <p class="footer__copyright-text">Copyright © 2019. Crafted with love.</p>
            </div>
            <!-- /.footer__copyright -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /footer -->

    <div class="mobile-menu">
        <div class="mobile-menu__overlay"></div>
        <div class="mobile-menu__inner">
            <div class="mobile-menu__wrapper">
                <button class="mobile-menu__close-btn">
                    <img src="img/close-mobile-menu.png" alt="Close menu" class="close-btn-icon">
                </button>
                <ul class="mobile-menu__list">
                    <li class="mobile-menu__item">
                        <a href="index.html" class="mobile-menu__link">Домой</a>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link mobile-menu__link--dropdown">Лендинги
                            <img src="img/drop-down-blue.png" class="icon mobile-menu__icon">
                        </a>
                        <ul class="mobile-menu__submenu-list">
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link mobile-menu__submenu-link--dropdown">Лендинг №1
                                </a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link mobile-menu__submenu-link--dropdown">Лендинг №2
                                </a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link mobile-menu__submenu-link--dropdown">Лендинг №3
                                </a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link mobile-menu__submenu-link--dropdown">Лендинг №4
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link mobile-menu__link--dropdown">Страницы
                            <img src="img/drop-down-blue.png" class="icon mobile-menu__icon">
                        </a>
                        <ul class="mobile-menu__submenu-list">
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link">Страница №1</a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link">Страница №2</a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link">Страница №3</a>
                            </li>
                            <li class="mobile-menu__submenu-item">
                                <a href="#" class="mobile-menu__submenu-link">Страница №4</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu__item">
                        <a href="#" class="mobile-menu__link mobile-menu__link--dropdown">Помощь
                        </a>
                    </li>
                </ul>
                <button class="mobile-menu__button modal-open-btn">Получить</button>
            </div>
            <!-- /.mobile-menu__wrapper -->
        </div>
        <!-- /.mobile-menu__inner -->
    </div>
    <!-- /.mobile-menu -->

    <div class="modal sign-up-modal">
        <div class="modal-overlay"></div>
        <div class="sign-up-modal__inner">
            <div class="close-btn-block">
                <img src="img/close-icon.png" alt="Close modal" class="sign-up-modal__close-btn">
            </div>
            <!-- /.close-btn-block -->
            <div class="sign-up-modal__content">
                <h3 class="sign-up-modal__title">Подпишитесь!</h3>
                <button class="sign-up-modal__google-sign-up-btn">
                    <img class="google-sign-up-img" src="img/Bitmap@3x.png" alt="Sign up via Google">
                    Войти с помощью Google
                </button>
                <h4 class="sign-up-modal__subtitle">Оформите подписку</h4>
                <form action="send.php" method="POST" class="sign-up-modal__form valid-form">
                    <h6 class="input-title">Ваше имя*</h6>
                    <input type="text" name="name" class="sign-up-modal__input sign-up-modal__name" placeholder="Ваше имя" required minlength="2">
                    <h6 class="input-title">Ваш Email*</h6>
                    <input type="email" name="email" class="sign-up-modal__input sign-up-modal__email" placeholder="Ваш Email" required>
                    <h6 class="input-title">Телефон*</h6>
                    <input type="tel" name="phone" class="sign-up-modal__input sign-up-modal__phone phone-with-ddd" placeholder="Ваш телефон" required minlength="16">

                    <button class="sign-up-modal__sign-up-btn" type="submit">Подписатся!</button>
                </form>
                <span class="sign-up-modal__required">Обязательные поля*</span>
            </div>
            <!-- /.sign-up-modal__content -->
        </div>
        <!-- /.sign-up-mpdal__inner -->
    </div>
    <!-- /.modal sign-up-modal -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/lazyframe.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>