<?php

include __DIR__ . '/autoload.php';

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $article = App\Models\Article::findById($id);
    if (false !== $article) {
        $page = new \App\View();
        //$page->assign('article', $article);
        $page->article = $article;
        $page->display(__DIR__ . '/Templates/article_template.php');
    } else {
        header('location:index.php');
    }
} else {
    header('location:index.php');
}

