<?php
include __DIR__ . '/../autoload.php';

if ((isset($_POST['author_id']))&&(isset($_POST['header_article']))&&(isset($_POST['text']))) {
    if (isset($_POST['id'])) {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $article = \App\Models\Article::findById($id);
    } else {
        $article = new \App\Models\Article();
    }
    $author = filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_STRING);
    $header = filter_input(INPUT_POST, 'header_article', FILTER_SANITIZE_STRING);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $article->author_id = $author;
    $article->header = $header;
    $article->text = $text;
    $article->save();
    header('location:index.php');
}
