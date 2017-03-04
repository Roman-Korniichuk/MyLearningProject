<?php

namespace App\Controllers;

class News extends Control
{
    protected function actionIndex()
    {
        $this->view->news = \App\Models\Article::getAll();
        $this->view->display(__DIR__ . '/../../Templates/index_template.php');
    }
    
    protected function actionArticle()
    {
        if (isset($_GET['id'])) {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $this->view->article = \App\Models\Article::findById($id);
            $this->view->display(__DIR__ . '/../../Templates/article_template.php');
        } else {
            header('location:index.php');
        }
    }
}
