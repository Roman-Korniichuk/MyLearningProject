<?php

namespace App\Models;

class User extends \App\Model 
    implements HasEmail
{
    const TABLE='users';
    
    public $name;
    public $email;
    
    public function getEmail() {
        return $this->email;
    }
}
