<?php
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

    $slider = file_get_contents('view/layouts/slider.php');
    $content_fluid = file_get_contents('view/layouts/home.php');
    
    $tpl->set_values('CONTENT', $slider);
    $tpl->set_values('CONTENT-FLUID', $content_fluid);
    $tpl->templ_parse();

    echo $tpl->html;
