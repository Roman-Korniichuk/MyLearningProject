<?php

namespace App;

abstract class Model 
{
    const TABLE = '';
    public $id;


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
            throw new Exceptions\Db('404 !');
            //return false;
        }
    }
    public function isNew()
    {
        return empty($this->id);
    }
    public function insert()
    {
        if (!$this->isNew()) {
            return;
        } else {
            $cols = [];
            $vals = [];
            foreach ($this as $key=>$val) {
                if ('id' == $key) {
                    continue;
                } else {
                    $cols[] = $key;
                    $vals[':'.$key] = $val;
                }
            }
            $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $cols) . ')' .
                    'VALUES (' . implode(',', array_keys($vals)) . ')';
            $db = DB::instance();
            $db->execute($sql, $vals);
        }
    }
    public function update($id)
    {
        $object = static::findById($id);
        if (!$object) {
            return false;
        } else {
            $cols = [];
            $vals = [];
            foreach ($this as $key=>$val) {
                if (('id' == $key)||(null == $val)) {
                    continue;
                } else {
                    $cols[] = $key . '=:' . $key;
                    $vals[':'.$key] = $val;
                }
            }
            $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',',$cols) .
                        ' WHERE id=:id';
            $vals[':id'] = $id;
            $db = DB::instance();
            $db->execute($sql, $vals);
        }
    }
    public function save()
    {
       if ($this->isNew()) {
           return $this->insert();
       } else {
           return $this->update($this->id);
       }
    }
    public function delete()
    {
        // DELETE FROM articles WHERE id=42
        if ($this->isNew()) {
            return false;
        } else {
            $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
            $data = [':id'=> $this->id];
            $db = DB::instance();
            $db->execute($sql, $data);
        }
    }
}
