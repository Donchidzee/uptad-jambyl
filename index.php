<?php
    require_once "config/config.php";
    require_once "db/db.php";
    require_once "models/articles.php";
    require_once "lib/templ_engine.php";

    $tpl = new template_class;

    $ru_templ_path = 'view/layouts/templ_ru.php';
    $kz_templ_path = 'view/layouts/templ_kz.php';

    if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
        $tpl->get_templ($kz_templ_path);
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
    } else {
        $tpl->get_templ($ru_templ_path);
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
    }

    $connection = db_connect();
    $articles = articles_all($connection);


    // Добавляем все новости в переменную
    for ($i = 0; $i < 6; $i++) {
        if ($i === 0) {
            $slider_items .=    '<div class="carousel-item active">
                                    <img src="/assets/img/news/' . $articles[$i]['image'] . '" class="news-slider__img d-block w-100" alt="news-slide">
                                </div>';
            continue;
        }
        $slider_items .=    '<div class="carousel-item">
                                <img src="/assets/img/news/' . $articles[$i]['image'] . '" class="news-slider__img d-block w-100" alt="news-slide">
                            </div>';
    }


    // Создаем класс шаблона для работы с шаблоном слайдера
    $slider_templ = new template_class;

    // Добаляем в слайдер сгенерированные новости
    $slider_templ->get_templ('view/layouts/slider.php');
    $slider_templ->set_values('SLIDER-ITEMS', $slider_items);
    $slider_templ->templ_parse();

    $slider = $slider_templ->html;

    //$slider = file_get_contents('view/layouts/slider.php');
    $content_fluid = file_get_contents('view/layouts/home.php');
    
    $tpl->set_values('CONTENT', $slider);
    $tpl->set_values('CONTENT-FLUID', $content_fluid);
    $tpl->templ_parse();

    echo $tpl->html;
