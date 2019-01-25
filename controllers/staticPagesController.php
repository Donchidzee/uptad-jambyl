<?php 
    require_once "../config/config.php";
    require_once "../lib/templ_engine.php";

    $tpl = new template_class;

    // Инициализзируем расположение шаблонов
    $ru_templ_path = '../view/layouts/templ_ru.php';
    $kz_templ_path = '../view/layouts/templ_kz.php';

    // Получаем шаблон в зависимости от установленного языка
    if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
        $tpl->get_templ($kz_templ_path);
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
        $lang = 'kz';
    } else {
        $tpl->get_templ($ru_templ_path);
        $tpl->set_values('TITLE', 'Управление пассажирского транспорта и автомобильных дорог акимата Жамбылской области');
        $lang = 'ru';
    }

    // Определяем какую страницу запрашивает пользователь через get запрос
    if (isset($_GET['path']) && isset($_GET['file_name'])) {
        $path = $_GET['path'];
        $file_name = $_GET['file_name'];
    } else {
        // Если $page_name не установлена, перенаправляем на домашнюю страницу
        header('Location: /');
    }

    // Получаем контент из указанного файла и добавляем его в шаблон
    $content = file_get_contents('../view/staticPages/' . $path . '/' . $file_name . '_' . $lang . '.php');
    $tpl->set_values('CONTENT', $content);

    $tpl->set_values('CONTENT-FLUID', '');

    // Парсим html и добавляем новый контент
    $tpl->templ_parse();

    // Выводим шаблон
    echo $tpl->html;