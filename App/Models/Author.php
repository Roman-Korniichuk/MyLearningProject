<?php
 
namespace App\Models;

class Author extends \App\Model 
    implements HasEmail
{
    const TABLE='users';
    
    public $name;
    public $email;
    
    public function getEmail() {
        return $this->email;
    }
    public function getName() {
        return $this->name;
    }
}
