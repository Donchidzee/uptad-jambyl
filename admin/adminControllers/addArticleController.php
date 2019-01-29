<?php

require_once "../../config/config.php";
require_once "../../db/db.php";
require_once "../../models/articles.php";

if (!empty($_POST)) {
    $connection = db_connect();
    $title_kz = $_POST['title_kz'];
    $title_ru = $_POST['title_ru'];
    $text_kz = $_POST['text_kz'];
    $text_ru = $_POST['text_ru'];
    $date = $_POST['date'];
    $image = $_POST['image'];

    addArticle($connection, $date, $image, $title_kz, $title_ru, $text_kz, $text_ru);
}

header('Location: /admin/adminController.php');