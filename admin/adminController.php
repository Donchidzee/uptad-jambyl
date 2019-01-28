<?php
session_start();

require_once "../config/config.php";
require_once "../db/db.php";
require_once "../models/articles.php";
require_once "../lib/templ_engine.php";



//unset($_SESSION['logined']);

// Проверяем, зашел ли пользователь
if ($_SESSION['logined']) {

    $tpl = new template_class;
    $tpl->get_templ('admin_layouts/admin_templ.html');

    // Определяем какое действие надо выполнить
    if (isset($_GET['action'])) {
        
        $action = $_GET['action'];
        $article_id = $_GET['id'];

        if ($action === 'delete') {
            deleteArticle($id);
        } elseif ($action === 'edit') {
            editArticle($id);
        } elseif ($action === 'add') {
            $content = addArticle();
        }
        
        
    } else {
        $content = showAllArticles();
    }


    $tpl->set_values('CONTENT', $content);
    $tpl->templ_parse();
} else {
    // Если пользователь не вошел, закидываем его на страницу входа
    $tpl->get_templ('admin_layouts/login.html');
}

echo $tpl->html;


function showAllArticles() {

    $connection = db_connect();
    $articles = articles_all($connection);
    
    foreach ($articles as $key => $article) {
        $rows .=                '<tr>
                                    <th scope="row">' . $article['id'] . '</th>
                                    <td>' . $article['date'] . '</td>
                                    <td>' . $article['title_ru'] . '</td>
                                    <td><a href="/admin/adminController.php?action=edit&id=' . $article['id'] . '">Редактировать</a></td>
                                    <td><a href="/admin/adminController.php?action=delete&id=' . $article['id'] . '">Удалить</a></td>
                                </tr>';
    }

    $table_tpl = new template_class;

    $table_tpl->get_templ('../admin/admin_layouts/all_articles_table.html');
    $table_tpl->set_values('CONTENT', $rows);
    $table_tpl->templ_parse();
    return $table_tpl->html;
}


function addArticle() {
    $add_tpl = new template_class;
    $add_tpl->get_templ('admin_layouts/add_article.html');

    return $add_tpl->html;
}