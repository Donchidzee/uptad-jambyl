<?php

function articles_all($connection) {
    // Запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($connection, $query);

    // Выводит ошибку
    // if (!result) {
    //     die(mysqli_error($connection));
    // }

    // Извлечение из базы данных в массив
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function get_article($connection, $article_id) {
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$article_id);
    $result = mysqli_query($connection, $query);

    // if (!result) {
    //     die("Error: " . mysqli_error($connection));
    // }

    $article = mysqli_fetch_assoc($result);

    return $article;
}

function addArticle($connection, $date, $image, $title_kz, $title_ru, $text_kz, $text_ru) {
    $title_kz = trim($title_kz);
    $title_ru = trim($title_ru);
    $text_kz = trim($text_kz);
    $text_ru = trim($text_ru);

    $query = "INSERT INTO articles (`date`, `image`, `title_kz`, `title_ru`, `text_kz`, `text_ru`) 
    VALUES ('%s', '%s', '%s', '%s', '%s','%s')";

    $query = sprintf($query,    mysqli_real_escape_string($connection, $date), 
                                mysqli_real_escape_string($connection, $image), 
                                mysqli_real_escape_string($connection, $title_kz), 
                                mysqli_real_escape_string($connection, $text_ru), 
                                mysqli_real_escape_string($connection, $text_kz), 
                                mysqli_real_escape_string($connection, $text_ru) );

    $result = mysqli_query($connection, $query);

    if (!result) {
        die('Error: ' . mysqli_error($connection));
    }

    return true;
}

function editArticle($connection, $id, $image, $date, $title_kz, $title_ru, $text_kz, $text_ru) {
    $id = (int)$id;
    $image = trim($image);
    $date = trim($date);
    $title_kz = trim($title_kz);
    $title_ru = trim($title_ru);
    $text_kz = trim($text_kz);
    $text_ru = trim($text_ru);


    if (!($id > 0)) {
        echo 'Returning false';
        return false;
    }

    $query = "UPDATE articles SET `image`='%s', `date`='%s', title_kz='%s', `title_ru`='%s', `text_kz`='%s', `text_ru`='%s' WHERE `id`='%d'";

    $query = sprintf($query,    mysqli_real_escape_string($connection, $image), 
                                mysqli_real_escape_string($connection, $date), 
                                mysqli_real_escape_string($connection, $title_kz), 
                                mysqli_real_escape_string($connection, $title_ru), 
                                mysqli_real_escape_string($connection, $text_kz), 
                                mysqli_real_escape_string($connection, $text_ru),
                                $id);


    $result = mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function deleteArticle($id) {
    
}