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
    $image = $_FILES['image']['name'];


    // Каталог, в который мы будем принимать файл:
    $uploaddir = '../../assets/img/news/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);

    if (!($_FILES['image']['type'] === 'image/png' || $_FILES['image']['type'] === 'image/jpg')) {
        die('Тип файла не поддерживается');
    }

    // Копируем файл из каталога для временного хранения файлов:
    if (copy($_FILES['image']['tmp_name'], $uploadfile)) {
        addArticle($connection, $date, $image, $title_kz, $title_ru, $text_kz, $text_ru);
        header('Location: /admin/adminController.php');
    } else { 
        die('Ошибка! Не удалось загрузить файл на сервер!');
    }

    // Выводим информацию о загруженном файле:
    // echo "<h3>Информация о загруженном на сервер файле: </h3>";
    // echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['image']['name']."</b></p>";
    // echo "<p><b>Mime-тип загруженного файла: ".$_FILES['image']['type']."</b></p>";
    // echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['image']['size']."</b></p>";
    // echo "<p><b>Временное имя файла: ".$_FILES['image']['tmp_name']."</b></p>";



    

}

function parse_text($str) {
    for ($result = '', $i = 0, $a = explode("\r\n", $str), $s = sizeof($a); $i < $s && ($result .= (!strlen($a[$i])?$a[$i]:'<p>'.$a[$i].'</p>')."\n") !== FALSE; ++$i); 
    return $result;
}

