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
    $tpl->set_values('TITLE', 'Бізге жазыңыз');
    $lang = 'kz';
} else {
    $tpl->get_templ($ru_templ_path);
    $tpl->set_values('TITLE', 'Напишите нам');
    $lang = 'ru';
}

$content = file_get_contents('../view/layouts/contact_page_' . $lang . '.php');





// Добавляем новости в шаблон
$tpl->set_values('CONTENT', $content);

$tpl->set_values('CONTENT-FLUID', '');

$tpl->templ_parse();

// Выводим шаблон
echo $tpl->html;