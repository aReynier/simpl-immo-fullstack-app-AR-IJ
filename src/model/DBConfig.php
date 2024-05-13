<?php

namespace model;

use PDO;
use PDOException;

class DBConfig {

    public function __construct ( private $host = 'db', private $user = "root", private $pass = "root", private $dbname = "test")
    {
    }

    public function getConnection() {
        try {
            $db= new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->pass);
            echo "connected !";
            return $db;
        } catch (PDOException $e) {
            throw new PDOExceptio($e->getMessage());
        }
    }

    public function create() {
        
    }
}

