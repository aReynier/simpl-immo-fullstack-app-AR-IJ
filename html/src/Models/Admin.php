<?php

class Admin {

private $id_admin;
private $login;
private $password;


public function getIdAdmin(){
    return
    $this->id_admin;
}



public function getLogin(){
    return $this->login;
}
public function setLogin($login){
    return $this->login = $login;
}

public function getPassword(){
    return $this->password;

}
public function setPassword($password){
    return $this->password = $password;
}

}