<?php
    require "config/config.php";

    $tpl = new template_class;

    if(isset($_COOKIE['lang'])) {
        $tpl->get_templ($_COOKIE['lang']);
    } else {
        $tpl->get_templ('ru');
    }

    $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
    $tpl->set_values('CONTENT', $content);
    $tpl->set_values('CONTENT-FLUID', $content_fluid);
    $tpl->templ_parse();

    echo $tpl->html;

$content = "
            <div class=\"slider news-slider col-12 col-lg-7 mt-4 mt-lg-0\">
                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                      <div class=\"carousel-item active\">
                        <img src=\"/assets/img/news/1.png\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                        <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                            <h5>Первая новость</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, suscipit.</p>
                        </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"/assets/img/news/slider_2.jpg\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                            <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                                <h5>Вторая новость</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, esse?</p>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"/assets/img/news/slider_3.jpg\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                            <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                                <h5>Третья новость</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, architecto.</p>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"/assets/img/news/slider_1.jpg\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                            <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                                <h5>Четвертая новость</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, architecto.</p>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"/assets/img/news/slider_2.jpg\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                            <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                                <h5>Пятая новость</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, architecto.</p>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"/assets/img/news/slider_3.jpg\" class=\"news-slider__img d-block w-100\" alt=\"news-slide\">
                            <div class=\"carousel-caption d-none d-md-block news-slider__text\">
                                <h5>Шестая новость</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, architecto.</p>
                            </div>
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                      <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div> ";


$content_fluid = "
    <!-- Main content of the page -->
    <div class=\"mt-4\">
        <div class=\"container last-news\">
            <div class=\"row\">
                <div class=\"last-news__card news-card col-12 col-md-6 col-lg-3 mt-5 mt-lg-0\">
                    <img src=\"/assets/img/news/slider_1.jpg\" alt=\"news\" class=\"news-card__img\">
                    <span class=\"news-card__add-time\">19.01.2019</span>
                    <span class=\"news-card__heading\">Lorem, ipsum dolor.</span>
                    <span class=\"news-card__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, blanditiis!</span>
                </div>
                <div class=\"last-news__card news-card col-12 col-md-6 col-lg-3 mt-5 mt-lg-0\">
                    <img src=\"/assets/img/news/slider_2.jpg\" alt=\"news\" class=\"news-card__img\">
                    <span class=\"news-card__add-time\">19.01.2019</span>
                    <span class=\"news-card__heading\">Lorem, ipsum dolor.</span>
                    <span class=\"news-card__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, blanditiis!</span>
                </div>
                <div class=\"last-news__card news-card col-12 col-md-6 col-lg-3 mt-5 mt-lg-0\">
                    <img src=\"/assets/img/news/slider_3.jpg\" alt=\"news\" class=\"news-card__img\">
                    <span class=\"news-card__add-time\">19.01.2019</span>
                    <span class=\"news-card__heading\">Lorem, ipsum dolor.</span>
                    <span class=\"news-card__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, blanditiis!</span>
                </div>
                <div class=\"last-news__card news-card col-12 col-md-6 col-lg-3 mt-5 mt-lg-0\">
                    <img src=\"/assets/img/news/slider_1.jpg\" alt=\"news\" class=\"news-card__img\">
                    <span class=\"news-card__add-time\">19.01.2019</span>
                    <span class=\"news-card__heading\">Lorem, ipsum dolor.</span>
                    <span class=\"news-card__text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, blanditiis!</span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"odometer-block container-fluid mt-5\">
        <div class=\"odometer-block__item\">
            <i class=\"fas fa-users odometer-block__icon\"></i>
            <span class=\"odometer-block__number\">4564</span>
            <span class=\"odometer-block__text\">Довольных пользователей</span>
        </div>
        <div class=\"odometer-block__item mt-4 mt-lg-0 ml-md-5\">
            <i class=\"fas fa-users odometer-block__icon\"></i>
            <span class=\"odometer-block__number\">3464</span>
            <span class=\"odometer-block__text\">Довольных пользователей</span>
        </div>
    </div>

    <div class=\"map mt-5\">
        <div class=\"container\">
            <div class=\"map-container col-12 col-lg-10 offset-lg-1 justify-content-center\">
                <script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A950fce7bd7e394bf4a6bdec8e51ce9c8eefbbf74d162af1d0a74404ab8f438a5&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true\"></script>
            </div>
        </div>
    </div> ";