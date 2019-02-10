<?php

require_once "../../config/config.php";
require_once "../../db/db.php";
require_once "../../models/articles.php";

if (!empty($_POST)) {
    $connection = db_connect();
    $title_kz = trim($_POST['title_kz']);
    $title_ru = trim($_POST['title_ru']);
    $text_kz = parse_text(trim($_POST['text_kz']));
    $text_ru = parse_text(trim($_POST['text_ru']));
    $date = trim($_POST['date']);
    $image = trim($_POST['image']);

    addArticle($connection, $date, $image, $title_kz, $title_ru, $text_kz, $text_ru);

}

function parse_text($str) {
    for ($result = '', $i = 0, $a = explode("\r\n", $str), $s = sizeof($a); $i < $s && ($result .= (!strlen($a[$i])?$a[$i]:'<p>'.$a[$i].'</p>')."\n") !== FALSE; ++$i); 
    return $result;
}

header('Location: /admin/adminController.php');