<?php

namespace App;

class View 
{
    protected $data;
    public function assign($name, $value) {
        $this->data[$name] = $value;
    }
    public function display($template) {
        if (!empty($this->data)) {    
            foreach ($this->data as $name=>$value) {
               $$name = $value;
            }
        }
        include $template;
    }
}
