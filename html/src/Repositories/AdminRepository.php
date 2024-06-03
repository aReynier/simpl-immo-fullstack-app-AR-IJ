<?php
namespace Repositories;

use PDO;
use Classes\DBConfig;

Class AdminRepository extends DBConfig{

    /**
    * get login and password
    * return $data
    */
    public function getAdmin(){
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT * FROM Admin");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

      /**
    * @param mixed $login, $password
    * post login and password
    */
    public function sendAdmin($login, $password){
        $query = 'INSERT INTO Admin (login, password) VALUES (:login, :password)';
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'login' => $login,
            'password'=> $password,
        ]);
    }
}