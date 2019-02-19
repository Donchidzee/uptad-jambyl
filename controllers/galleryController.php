<?php

require_once "../config/config.php";
require_once "../db/db.php";
require_once "../models/articles.php";
require_once "../lib/templ_engine.php";

$connection = db_connect();
$articles = articles_all($connection);

$tpl = new template_class;

// Инициализзируем расположение шаблонов
$ru_templ_path = '../view/layouts/templ_ru.php';
$kz_templ_path = '../view/layouts/templ_kz.php';

// Получаем шаблон в зависимости от установленного языка
if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
    $tpl->get_templ($kz_templ_path);
    $tpl->set_values('TITLE', 'Фотогалерея');
    $lang = 'kz';
} else {
    $tpl->get_templ($ru_templ_path);
    $tpl->set_values('TITLE', 'Фотогалерея');
    $lang = 'ru';
}

$content = '<h1 class="gallery__heading">Фотогалерея</h1>';

// Получаем список всех файлов в дириктории новостей
$images = scandir('../assets/img/news/');

// Вычисляем размер массива для опитимизации цикла
$images_size = sizeof($images);
for ($i = 0; $i < $images_size; $i++) {
    // Проверяем, является ли файл картинкой
    if (strripos($images[$i], '.png') || strripos($images[$i], '.jpg')) {
        $content .= '<img class="gallery__image" src="../assets/img/news/' . $images[$i] . '" alt="Photo">';
    }
}

// Добавляем новости в шаблон
$tpl->set_values('CONTENT', $content);

$tpl->set_values('CONTENT-FLUID', '');

$tpl->templ_parse();

// Выводим шаблон
echo $tpl->html;
