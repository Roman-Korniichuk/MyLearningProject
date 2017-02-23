<?php

namespace App;

abstract class Model 
{
    const TABLE = '';
    
    public static function getAll()
    {
        $db = DB::instance();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }
    public static function findById($id)
    {
        $db = DB::instance();
        $data = $db->query(
                'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
                static::class,
                [':id' => $id]
                );
        if (count($data) > 0) {
            return $data[0];
        } else {
            return false;
        }
    }
}
