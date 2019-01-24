<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{TITLE}</title>
    <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/img/favicon/favicon.ico" type="image/x-icon">
    <!-- Add fonts Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <!-- Add font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/out/main.min.css">
</head>
<body>
    <div class="preloader container-fluid">
        <div class="loading-window">
            <div class="car">
                <div class="strike"></div>
                <div class="strike strike2"></div>
                <div class="strike strike3"></div>
                <div class="strike strike4"></div>
                <div class="strike strike5"></div>
                <div class="car-detail spoiler"></div>
                <div class="car-detail back"></div>
                <div class="car-detail center"></div>
                <div class="car-detail center1"></div>
                <div class="car-detail front"></div>
                <div class="car-detail wheel"></div>
                <div class="car-detail wheel wheel2"></div>
            </div>
            <div class="text">
                <span>Loading</span><span class = "dots">...</span>
            </div>
        </div>
    </div>

    <div class="fixed-contacts">
        <div class="fixed-contacts__item" id="fixed-contacts__phone-button">
            <i class="fas fa-phone fixed-contacts__icon fixed-contacts__phone"></i>
            <span class="fixed-contacts__animated-text fixed-contacts__phone" id="fixed-contacts__animated-phone-text">+7 707 789 34 56</span>
        </div>
        <div class="fixed-contacts__item" id="fixed-contacts__email-button">
            <i class="fas fa-at fixed-contacts__icon fixed-contacts__email"></i>
            <span class="fixed-contacts__animated-text fixed-contacts__email" id="fixed-contacts__animated-email-text">uptad-jambyl@mail.ru</span>
        </div>
    </div>


    <i class="fas fa-arrow-up go-to-top-button icon-button"></i>

    <div class="contact-bar container-fluid">
        <div class="contact-bar__container container">
            <div class="contact-bar__lang-switch">
            <i class="contact-bar__kz-button contact-bar__lang-button" id="kz-button">KAZ</i>
            <i class="contact-bar__ru-button contact-bar__lang-button contact-bar__lang-button_active" id="ru-button">RU</i>
            </div>
            <div class="contact-bar__contact-info">
                <a href="#"><i class="fab fa-instagram small-icon contact-bar__icon instagram-icon"></i></a>
                <a href="#"><i class="fab fa-telegram small-icon contact-bar__icon telegram-icon"></i></a>
                <a href="#"><i class="fab fa-youtube small-icon contact-bar__icon youtube-icon"></i></a>
                <a href="#"><i class="fab fa-twitter small-icon contact-bar__icon twitter-icon"></i></a>
                <a href="#"><i class="fab fa-facebook-square small-icon contact-bar__icon facebook-icon"></i></a>
            </div>
        </div>
    </div>

    <header class="header container">
        <a class="header__logo-container logo" href="/">
            <img src="/assets/img/logo.png" alt="company logo" class="logo__img">
            <div class="logo__divider"></div>
            <h1 class="logo__text">Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области</h1>
        </a>

        <div class="header__input">
            <i class="fas fa-bars header__menu-open-button icon-button hide-desktop"></i>
            <div class="search-field header__search">
                <!-- <input type="text" name="search-field" class="search-field__input" placeholder="Search..."> -->
                <div class="animated-search">
                    <div class="animated-search__search-box">
                        <input type="text" placeholder="Search" class="animated-search__input">
                        <div class="animated-search__btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </header>

    <nav class="top-nav">
        <i class="fas fa-times top-nav__menu-close-button icon-button hide-desktop"></i>
        <div class="top-nav__container">
            <a href="#" class="top-nav__link">Главная</a>
            <a href="#" class="top-nav__link">Новости</a>
            <a href="#" class="top-nav__link top-nav__link_long">Государственные символы</a>
            <a href="#" class="top-nav__link top-nav__link_long">Послание президента</a>
            <a href="#" class="top-nav__link top-nav__link_long">Цифровой Казахстан</a>
            <a href="#" class="top-nav__link">Пресс-центр</a>
            <a href="#" class="top-nav__link top-nav__link_long">Социальные вопросы</a>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row  justify-content-center">
            <aside class="links-block col-11 col-lg-2">
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-1">
                    <span class="links-block__text">Об управлении</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-1">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl&file_name=kgu.php">Положение КГУ "Управление здравоохранение акимата Жамбылской области"</a>
                    <a class="links-block__collapse-text" data-toggle="collapse" data-target="#collapse-1-1">Структура управления</a>
                    <div class="collapse links-block__collapse ml-2" id="collapse-1-1">
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=structure.php">Структура</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlHead.php">Руководитель управления</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlHeadDeputy.php">Заместитель руководителя</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlDepartments.php">Отделы управления</a>
                    </div>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl&file_name=budget.php">Бюджет сферы пассажирского транспорта и автомобильных дорого областного значения</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-2">
                    <span class="links-block__text">Работа с населением</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-2">
                    <a class="links-block__collapse-text" data-toggle="collapse" data-target="#collapse-2-1">Вопросы о физических и юридических лицах</a>
                    <div class="collapse links-block__collapse ml-2" id="collapse-2-1">
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=workWithPopulation/questions&file_name=timeTable.php">График приема физических и юридических лиц</a>
                    </div>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-3">
                    <span class="links-block__text">Нормативно правовые акты</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-3">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=code.php">Кодекс РК «О здоровье народа и системе здравоохранения»</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=govProgram.php">Государственная программа развития здравоохранения РК «Денсаулық» на 2016-2019 годы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=nationPlan.php">План нации — 100 конкретных шагов</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=roadLaw.php">Закон об автомобильных дорогах РК</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=transportRoadLaw.php">Закон об автомобильных транспортных дорогах РК</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-4">
                    <span class="links-block__text">Государственные услуги</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-4">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesLaw.php">Закон РК "Об оказываемых государственных услугах"</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesRegistry.php">Реестр государственных услуг</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesRegulations.php">Стандарт оказываемых государственных услуг</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesStandart.php">Регламент оказываемых государственных услуг</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-5">
                    <span class="links-block__text">Борьба против коррупции</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-5">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=strategy.php">Стратегия РК борьбы с коррупцией на 2015-2025 годы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=corruptionLaw.php">Закон РК о борьбе с коррупцией</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=corruptionActivity.php">Мероприятия по противодействию коррупции</a>
                    <a class="links-block__collapse-text" href="#">Видеоролики</a>
                </div>
            </aside>
            <main class="main news-slider col-12 col-lg-7 mt-4 mt-lg-0">
                {CONTENT}
            </main>

                
            <div class="person-info col-12 col-lg-3 mt-4 mt-lg-0">
                <div class="card person-info__card" style="width: 18rem;">
                    <img src="/assets/img/person-info/person.jpg" class="card-img-top person-info__img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Джанибеков Бакытжан Оразалиевич</h5>
                        <h6 class="person-info__text-muted">Руководитель управления пассажирского транспорта и автомобильных дорог акимата Жамбылской области</h6>
                        <a href="#" class="btn btn-primary person-info__button mt-2">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {CONTENT-FLUID}

    <footer class="footer">
        <div class="container mb-4">
            <div class="row">
                <div class="footer__contacts col-12 col-lg-6">
                    <h5 class="footer__heading">Контакты</h5>
                    <span class="footer__text">Юридический адрес: РК, г. Алматы, Алатауский район, ул. Нурпеисова, здание 1, н.п. 1</span>
                    <span class="footer__text">Филиал АО “ForteBank” в г. Алматы</span>
                    <span class="footer__text">Телефон: +7 (727) 246 32 51</span>
                    <span class="footer__text">E-mail: ms0418@mail.ru</span>
                </div>
                <div class="footer__links col-12 col-lg-5 offset-lg-1 mt-3 mt-lg-0">
                    <h5 class="footer__heading">Полезные ссылки</h5>
                    <a href="#" class="footer__link">Об управлении</a>
                    <a href="#" class="footer__link">Работа с населением</a>
                    <a href="#" class="footer__link">Нормативно праввовые акты</a>
                    <a href="#" class="footer__link">Государственные услуги</a>
                    <a href="#" class="footer__link">Борьба против коррупции</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer__copyright">
                    <i class="far fa-copyright"></i>
                    <span class="footer__copyright-text">TOO "Mechanic-Steel KZ"</span>
            </div>
        </div>
    </footer>
    

    <script src="/assets/js/jquery-3.3.1.min.js" defer></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js" defer></script>

    
    <script src="/assets/js/preloader.js" defer></script>
    <script src="/assets/js/mobileMenu.js" defer></script>
    <script src="/assets/js/scrollToTop.js" defer></script>
    <script src="/assets/js/animated-search.js" defer></script>
    <script src="/assets/js/fixed-contacts.js" defer></script>

    <script src="/assets/js/lang-buttons.js"></script>

</body>
</html>