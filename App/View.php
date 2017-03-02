<?php

namespace App;

class View 
    implements \Countable
{
    use MagicSet;
    protected $data;
    
    public function display($template) 
    {
        echo $this->render($template);
    }
    
    public function render($template)
    {
        ob_start();
        if (!empty($this->data)) {    
            foreach ($this->data as $name=>$value) {
               $$name = $value;
            }
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }


    public function count() 
    {
        return count($this->data);
    }
}
