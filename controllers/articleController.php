<?php

require_once "../config/config.php";
require_once "../db/db.php";
require_once "../models/articles.php";
require_once "../lib/templ_engine.php";

$tpl = new template_class;

// Инициализзируем расположение шаблонов
$ru_templ_path = '../view/layouts/templ_ru.php';
$kz_templ_path = '../view/layouts/templ_kz.php';

// Получаем шаблон в зависимости от установленного языка
if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
    $tpl->get_templ($kz_templ_path);
    $tpl->set_values('TITLE', 'Последние новости');
    $lang = 'kz';
} else {
    $tpl->get_templ($ru_templ_path);
    $tpl->set_values('TITLE', 'Последние новости');
    $lang = 'ru';
}

// Получаем id статьи, которую надо вывести
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
} else {
    header('Location: /');
}

$connection = db_connect();
$article = get_article($connection, $article_id);

$content = '<div class="article">
                <h1 class="article__title">' . $article['title'] . '</h1>
                <img src="../assets/img/news/' . $article['image'] . '" alt="Изображение новости" class="article__img">
                <p class="article__text">' . $article['text'] . '</p>
            </div>';

$tpl->set_values('CONTENT', $content);

$tpl->set_values('CONTENT-FLUID', '');

$tpl->templ_parse();

// Выводим шаблон
echo $tpl->html;