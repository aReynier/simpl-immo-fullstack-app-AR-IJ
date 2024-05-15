<?php

namespace Classes;

use PDO;
use PDOException;

class DBConfig {
    protected $connection;

    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $pdo;

    public function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASSWORD'];
        $this->dbname = $_ENV['DB_NAME'];
    }

    public function getConnection() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->pass);
            echo "connected !";
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}

