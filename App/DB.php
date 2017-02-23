<?php



namespace App;


class DB 
{
    protected $dbh;
    
    public function __construct() {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=site', 'root', '');
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