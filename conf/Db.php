<?php

class Db
{
    const HOST = 'localhost';
    const DB_NAME = 'test_bd';
    const LOGIN = 'root';
    const PASSWORD = '';
    
    protected $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host='.self::HOST.';dbname='.self::DB_NAME.'', self::LOGIN, self::PASSWORD);
    }
    
    public function select(string $query)
    {   
        return $this->db->query($query);
    }
    
    public function insert(string $query)
    {   
        return $this->db->prepare($query)->execute();
    }

    public function update(string $query)
    {
        return $this->db->prepare($query)->execute();
    }

    public function delete(string $query)
    {
        return $this->db->prepare($query)->execute();
    }
}

