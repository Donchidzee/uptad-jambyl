<!DOCTYPE html>
<html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{DESC}">
    <meta name="author" content="Onlasyn Sayazhan">
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

    <div class="fixed-contacts hide-mobile">
        <div class="fixed-contacts__item" id="fixed-contacts__phone-button">
            <i class="fas fa-phone fixed-contacts__icon fixed-contacts__phone"></i>
            <span class="fixed-contacts__animated-text fixed-contacts__phone" id="fixed-contacts__animated-phone-text">+7 707 789 34 56</span>
        </div>
        <div class="fixed-contacts__item" id="fixed-contacts__email-button">
            <i class="fas fa-at fixed-contacts__icon fixed-contacts__email"></i>
            <span class="fixed-contacts__animated-text fixed-contacts__email" id="fixed-contacts__animated-email-text">uptad-jambyl@mail.ru</span>
        </div>
    </div>

    <div class="change-font hide-mobile">
        <div class="change-font__item">
            <i class="fas fa-eye-slash blind_mode"></i>
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
            <h1 class="logo__text">Жамбыл облысы әкімдігінің жолаушылар көлігі және автомобиль жолдары басқармасы</h1>
        </a>
        <div class="header__input">
            <i class="fas fa-bars header__menu-open-button icon-button hide-desktop"></i>
            <i class="fas fa-eye-slash hide-desktop header__change-font-button blind_mode"></i>
            <form class="search-field header__search" action="/controllers/searchController.php" method="get">
                <div class="animated-search">
                    <div class="animated-search__search-box">
                        <input type="text" placeholder="Search" class="animated-search__input" name="search">
                        <div class="animated-search__btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        
    </header>

    <nav class="top-nav">
        <i class="fas fa-times top-nav__menu-close-button icon-button hide-desktop"></i>
        <div class="top-nav__container">
            <a href="/" class="top-nav__link">Басты бет</a>
            <a href="/controllers/allNewsController.php" class="top-nav__link">Жаңалықтар</a>
            <a href="/controllers/staticPagesController.php?path=symbols&file_name=symbols" class="top-nav__link top-nav__link_long">Мемлекеттік Рәміздер</a>
            <a href="#" class="top-nav__link top-nav__link_long">Президент жолдауы</a>
            <a href="#" class="top-nav__link top-nav__link_long">Цифрлы Қазақстан</a>
            <a href="#" class="top-nav__link top-nav__link_long">Пресс-орталығы</a>
            <a href="/controllers/contactUsController.php" class="top-nav__link top-nav__link_long">Әлеуметтік мәселелер</a>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row  justify-content-center">
            <aside class="links-block col-11 col-lg-2">
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-1">
                    <span class="links-block__text">Басқару</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-1">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl&file_name=kgu">«Жамбыл облысы әкімдігінің жолаушылар көлігі және автомобиль жолдары басқармасы» КММ туралы ереже</a>
                    <a class="links-block__collapse-text" data-toggle="collapse" data-target="#collapse-1-1">Басқару құрылымы</a>
                    <div class="collapse links-block__collapse ml-2" id="collapse-1-1">
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=structure">Құрылым</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlHead">Басқарма бастығы</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlHeadDeputy">Бастықтың орынбасары</a>
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlDepartments">Басқару бөлімдері</a>
                    </div>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=aboutControl&file_name=budget">Облыстық маңызы бар жолаушылар көлігі және автомобиль жолдары саласының бюджеті</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-2">
                    <span class="links-block__text">Халықпен жұмыс</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-2">
                    <a class="links-block__collapse-text" data-toggle="collapse" data-target="#collapse-2-1">Жеке және заңды тұлғалар туралы сұрақтар</a>
                    <div class="collapse links-block__collapse ml-2" id="collapse-2-1">
                        <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=workWithPopulation/questions&file_name=timeTable">График приема физических и юридических лиц</a>
                    </div>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-3">
                    <span class="links-block__text">Нормативтік құқықтық актілер</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-3">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=code">«Халық денсаулығы және денсаулық сақтау жүйесі туралы» Қазақстан Республикасының кодексі</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=govProgram">2016-2019 жылдарға арналған «Денсаулық» Қазақстандағы денсаулық сақтауды дамытудың мемлекеттік бағдарламасы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=nationPlan">Ұлттың жоспары - 100 нақты қадам</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=roadLaw">Қазақстан Республикасының жолдары туралы заңы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=regulations&file_name=transportRoadLaw">Қазақстан Республикасының транспорттық жолдары туралы заңы</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-4">
                    <span class="links-block__text">Мемлекеттік қызметтер</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-4">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesLaw">«Мемлекеттік көрсетілетін қызметтер туралы» Қазақстан Республикасының заңы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesRegistry">Мемлекеттік қызметтер тізілімі</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesRegulations">Мемлекеттік қызметтер стандарттары</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=govServices&file_name=servicesStandart">Көрсетілетін мемлекеттік қызметтер туралы ереже</a>
                </div>
                <a class="links-block__item" data-toggle="collapse" data-target="#collapse-5">
                    <span class="links-block__text">Сыбайлас жемқорлыққа қарсы күрес</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <div class="collapse links-block__collapse" id="collapse-5">
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=strategy">Қазақстанның 2015-2025 жылдарға арналған сыбайлас жемқорлыққа қарсы күрес стратегиясы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=corruptionLaw">Қазақстан Республикасының сыбайлас жемқорлыққа қарсы күрес туралы заңы</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=corruptionActivity">Сыбайлас жемқорлыққа қарсы іс-шаралар</a>
                    <a class="links-block__collapse-text" href="/controllers/staticPagesController.php?path=fightCorruption&file_name=corruptionPosters">Антикоррупционные постеры</a>
                </div>
                <a class="links-block__item" href="/controllers/videoController.php">
                    <span class="links-block__text">Бейнебаяндар</span>
                    <i class="fas fa-angle-right"></i>
                </a>
            </aside>
            <main class="main news-slider col-12 col-lg-7 mt-4 mt-lg-0">
                {CONTENT}
            </main>

                
            <div class="person-info col-12 col-lg-3 mt-4 mt-lg-0">
                <div class="card person-info__card" style="width: 18rem;">
                    <img src="/assets/img/person-info/person.jpg" class="card-img-top person-info__img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Жәнібеков Бақытжан Оразалыұлы</h5>
                        <h6 class="person-info__text-muted">Жамбыл облысы әкімдігінің жолаушылар көлігі және автокөлік жолдары басқармасының бастығы</h6>
                        <a href="/controllers/staticPagesController.php?path=aboutControl/controlStructure&file_name=controlHead" class="btn btn-primary person-info__button mt-2">Толығырақ</a>
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
                    <h5 class="footer__heading">Байланыс</h5>
                    <span class="footer__text">Мекен-жайы: улица Толе би 35 </span>
                    <span class="footer__text">Телефон: 43-69-51 канцелярия</span>
                    <span class="footer__text">Телефон: 43-69-52 приемная</span>
                    <span class="footer__text">E-mail: depdoroga@mail.ru</span>
                </div>
                <div class="footer__links col-12 col-lg-5 offset-lg-1 mt-3 mt-lg-0">
                    <h5 class="footer__heading">Пайдалы сілтемелер</h5>
                    <a href="/" class="footer__link">Басты бет</a>
                    <a href="/controllers/allNewsController.php" class="footer__link">Жаңалықтар</a>
                    <a href="/controllers/staticPagesController.php?path=symbols&file_name=symbols" class="footer__link">Мемлекеттік Рәміздер</a>
                    <a href="#" class="footer__link">Президент жолдауы</a>
                    <a href="#" class="footer__link">Цифрлік Қазақстан</a>
                    <a href="#" class="footer__link">Пресс-орталығы</a>
                    <a href="#" class="footer__link">Қоғамдық сұрақтар</a>
                    <a href="/controllers/videoController.php" class="footer__link">Бейнебаяндар</a>
                    <a href="/admin/adminController.php" class="footer__link">Кіру</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer__copyright">
                    <i class="far fa-copyright"></i>
                    <span class="footer__copyright-text">UPTAD-JAMBYL</span>
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

    <script src="/assets/js/lang-buttons.js" defer></script>
    <script src="/assets/js/change-font.js" defer></script>


</body>
</html>