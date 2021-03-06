<?php

namespace App\Controllers;

use App\View;

class Control {
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
}
