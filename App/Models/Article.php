<?php

namespace App\Models;

/**
 * 
 * @property string $author_id
 * @property string $header
 * @property string $text
 * 
 */
class Article extends \App\Model
{
    const TABLE = 'articles';

    public $author_id;
    public $header;
    public $text;
     
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
        $author = Author::findById($this->author_id);
        return $author->getName();
    }
    
    public function getHeader() 
    {
        return $this->header;
    }
    
/**
 * 
 * Get first 100 symbols of text
 * 
 * @return string
 */    
    public function getDescription() 
    {
        $text = $this->text;
        $desc = substr($text, 0, 100) . '...';
        return $desc;
    }
}
