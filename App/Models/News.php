<?php

namespace App\Models;
use App\Models\Article;

class News extends \App\Model
{
    protected $news;
    
    public function __construct() {
        $this->news = Article::getAll();
    }

    public function getLastNews() {
        $all = $this->news;
        $last = [];
        for ($i=0; $i<3; $i++) {
            $last[] = array_pop($all);
        }
        return $last;
    }
}
