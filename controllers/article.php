<?php

// Получаем id статьи, которую надо вывести
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
} else {
    header('Location: /');
}

echo $article_id;