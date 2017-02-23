<?php

namespace App;

class Config {
    use Singleton;
    
    public $data = [];

    protected function __construct() {
        $configs = file(__DIR__ . '/../config', FILE_IGNORE_NEW_LINES);
        foreach ($configs as $line) {
            $pos = strpos($line, ':');
            $key = substr($line, 0,($pos));
            $val = substr($line, ($pos+1));
            $this->data[$key] = $val;
        }
        
    }
}
