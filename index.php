<?php
    require_once "config/config.php";
    require_once "view/templ_engine.php";

    $tpl = new template_class;

    if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
        $tpl->get_templ('view/templ/templ_kz.php');
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
    } else {
        $tpl->get_templ("view/templ/templ_ru.php");
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
    }

    $slider = file_get_contents('view/templ/slider.php');
    $content_fluid = file_get_contents('view/templ/home.php');
    
    $tpl->set_values('CONTENT', $slider);
    $tpl->set_values('CONTENT-FLUID', $content_fluid);
    $tpl->templ_parse();

    echo $tpl->html;
