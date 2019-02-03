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

if(isset($_GET['search'])){
    $search = $_GET['search'];
} else {
    header('Location: /');
}

// Получаем шаблон в зависимости от установленного языка
if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'kz') {
    $tpl->get_templ($kz_templ_path);
    $tpl->set_values('TITLE', 'Іздеу');
    $lang = 'kz';
} else {
    $tpl->get_templ($ru_templ_path);
    $tpl->set_values('TITLE', 'Поиск');
    $lang = 'ru';
}


$content = '';

// Переводим запрос в нижний регистр
$search = mb_convert_case($search, MB_CASE_LOWER, "UTF-8"); 

if ($lang === 'kz') {
    foreach ($articles as $key => $article) {
        $title_kz = mb_convert_case($article['title_kz'], MB_CASE_LOWER, "UTF-8"); 
        $title_ru = mb_convert_case($article['title_ru'], MB_CASE_LOWER, "UTF-8"); 
        if (contains($search, $title_kz) || contains($search, $title_ru)) {
                $content .= get_kz_content($article);
        }
    
    }
} else {
    foreach ($articles as $key => $article) {
        $title_kz = mb_convert_case($article['title_kz'], MB_CASE_LOWER, "UTF-8"); 
        $title_ru = mb_convert_case($article['title_ru'], MB_CASE_LOWER, "UTF-8"); 
        if (contains($search, $title_kz) || contains($search, $title_ru)) {
                $content .= get_ru_content($article);
        }
    
    }
}



// Добавляем новости в шаблон
$tpl->set_values('CONTENT', $content);

$tpl->set_values('CONTENT-FLUID', '');

$tpl->templ_parse();

// Выводим шаблон
echo $tpl->html;



function contains($needle, $haystack) {
    return strpos($haystack, $needle) !== false;
}

function get_ru_content($article) {
    $content = '';

     $content = '<div class="card mb-3 all-news-card">
        <img src="/assets/img/news/' . $article['image'] . '" class="card-img-top" alt="Фотография статьи">
        <div class="card-body">
            <h5 class="card-title">' . $article['title_ru'] . '</h5>
            <i>Дата публикации: ' . $article['date'] . '</i>
            <p class="card-text">' . substr($article['text_ru'], 0, 300) . '...' . '</p>
            <a href="/controllers/articleController.php?id=' . $article['id'] . '" class="btn btn-primary all-news-card__button">Подробнее</a>
        </div>
    </div>';


    return $content;
}

function get_kz_content($article) {
    $content = '';

    $content .= '<div class="card mb-3 all-news-card">
            <img src="/assets/img/news/' . $article['image'] . '" class="card-img-top" alt="Фотография статьи">
            <div class="card-body">
                <h5 class="card-title">' . $article['title_kz'] . '</h5>
                <i>Дата публикации: ' . $article['date'] . '</i>
                <p class="card-text">' . substr($article['text_kz'], 0, 300) . '...' . '</p>
                <a href="/controllers/articleController.php?id=' . $article['id'] . '" class="btn btn-primary all-news-card__button">Толығырақ</a>
            </div>
        </div>';
    

    return $content;
}