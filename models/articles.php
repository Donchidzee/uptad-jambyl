<?php

function articles_all($connection) {
    // Запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($connection, $query);

    if (!result) {
        die(mysqli_error($connection));
    }

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

    if (!result) {
        die("Error: " . mysqli_error($connection));
    }

    $article = mysqli_fetch_assoc($result);

    return $article;
}