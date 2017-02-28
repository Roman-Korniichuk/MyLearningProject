<?php
include __DIR__ . '/../autoload.php';

$page = new \App\View();

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $article = App\Models\Article::findById($id);
    
} else {
    $article = new App\Models\Article();
}

if ((isset($_POST['author']))&&(isset($_POST['header_article']))&&(isset($_POST['text']))) {
    $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
    $header = filter_input(INPUT_POST, 'header_article', FILTER_SANITIZE_STRING);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $article->author = $author;
    $article->header = $header;
    $article->text = $text;
    $article->save();
    header('location:index.php');
}

//$page->assign('article', $article);
$page->article = $article;
$page->display(__DIR__ . '/../Templates/admin_update.php');

