<?php

namespace App\Models;

class Article extends \App\Model
{
    const TABLE = 'articles';

    protected $author;
    protected $header;
    protected $text;
    
    public function getId() 
    {
        return $this->id;
    }
    public function getText() 
    {
        return $this->text;
    }
    public function getAuthor() 
    {
        return $this->author;
    }
    public function getHeader() 
    {
        return $this->header;
    }
    public function getDescription() 
    {
        $text = $this->text;
        $desc = substr($text, 0, 100) . '...';
        return $desc;
    }
}
