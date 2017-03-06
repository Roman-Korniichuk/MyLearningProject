<?php

namespace App;
use App\Config;

class DB 
{
    use Singleton;
    
    protected $dbh;
    
    protected function __construct() {
        $config = Config::instance();
        $data = $config->data;
        try {
        $this->dbh = new \PDO('mysql:host=' . $data['host'] . ';dbname=' . $data['db'], $data['user'], $data['pass']);
        } catch (\PDOException $e) {
            $msg = $e->getMessage();
            //die;
            throw new \App\Exceptions\Db('Something bad with connection to DB' . $msg);
        }
    }
    public function execute($sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }
    public function query($sql, $class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }
}