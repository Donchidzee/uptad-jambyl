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
    $tpl->set_values('TITLE', 'Последние новости');
    $lang = 'kz';
} else {
    $tpl->get_templ($ru_templ_path);
    $tpl->set_values('TITLE', 'Последние новости');
    $lang = 'ru';
}


// Добавляем в переменную $content все новости 
$content = '';

foreach ($articles as $key => $article) {
    $content .= '<div class="card mb-3 all-news-card">
        <img src="/assets/img/news/' . $article['image'] . '" class="card-img-top" alt="Фотография статьи">
        <div class="card-body">
            <h5 class="card-title">' . $article['title'] . '</h5>
            <i>Дата публикации: ' . $article['date'] . '</i>
            <p class="card-text">' . substr($article['text'], 0, 300) . '...' . '</p>
            <a href="/controllers/articleController.php?id=' . $article['id'] . '" class="btn btn-primary all-news-card__button">Подробнее</a>
        </div>
    </div>';
}


// Добавляем новости в шаблон
$tpl->set_values('CONTENT', $content);

$tpl->set_values('CONTENT-FLUID', '');

$tpl->templ_parse();

// Выводим шаблон
echo $tpl->html;

