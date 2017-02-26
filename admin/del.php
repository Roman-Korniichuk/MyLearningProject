<?php
include __DIR__ . '/../autoload.php';

if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $article = App\Models\Article::findById($id);
    $article->delete();
}