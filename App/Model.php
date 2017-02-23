<?php



namespace App;


abstract class Model 
{
    const TABLE = '';
    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }
}
