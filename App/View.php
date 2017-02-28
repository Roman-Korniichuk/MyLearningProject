<?php

namespace App;

class View 
{
    use MagicSet;
    protected $data;
    
    public function display($template) 
    {
        if (!empty($this->data)) {    
            foreach ($this->data as $name=>$value) {
               $$name = $value;
            }
        }
        include $template;
    }
}
