<?php

namespace Controllers;

use Services\Response;
use Classes\DBConfig;
use Repositories\EstateRepository;
use PDO;

/**
* 
*/
class EstateController {
    use Response;

    // private $propertySurface;
    // private $price;
    // private $city;
    // private $roomNumber;
    // private $notaryCosts = 8;

    // /**
    // * 
    // */
    
    // public function __construct($propertySurface, $price, $city, $roomNumber) {
    //     $this->propertySurface = $propertySurface;
    //     $this->price = $price;
    //     $this->city = $city;
    //     $this->roomNumber = $roomNumber;
    // }

    /**
    * 
    */
    public function index() {
        $estateRepository = new EstateRepository();
        $estates = $estateRepository->getAllEstates();
        var_dump($estates);

        // $db = new DBConfig();
        // $db->getConnection();
        // $stmt = $db->connection->prepare("SELECT * FROM Estate");
        // $stmt->execute();
        // print_r($stmt->fetchAll(PDO::FETCH_OBJ));
        // $this->render('EstateTemplate');
     }

    public function displayAllEstates() {
        echo "Here is all estates";
        $this->render('EstateTemplate');
    }

    public function pageNotFound() {
        
    }
}