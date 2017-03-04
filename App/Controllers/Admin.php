<?php

namespace App\Controllers;

class Admin extends Control
{
    
    protected function actionIndex()
    {
        $this->view->articles = \App\Models\Article::getAll();
        $this->view->display(__DIR__ . '/../../Templates/admin_template.php');
    }
    protected function actionUpdate() 
    {
        if (isset($_GET['id'])) {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $this->view->article = \App\Models\Article::findById($id);
        } else {
            $this->view->article = new \App\Models\Article;
        }
        $this->view->authors = \App\Models\Author::getAll();
        $this->view->display(__DIR__ . '/../../Templates/admin_update.php');
    }
    
}
