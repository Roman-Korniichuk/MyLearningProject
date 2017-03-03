<?php

namespace App\Controllers;

use App\View;

class News 
{
    protected $view;
    
    public function __construct() 
    {
        $this->view = new View();
    }
    
    public function action($action)
    {
        $methodName = 'action' . $action;
        return $this->$methodName();
    }
    
    protected function actionIndex()
    {
        $this->view->news = \App\Models\Article::getAll();
        $this->view->display(__DIR__ . '/../../Templates/index_template.php');
    }
    
    protected function actionArticle()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../../Templates/article_template.php');
    }
}
