<?php

namespace controller;

// use model\db\DBConfig;

/**
* 
*/
class Estate {
    private $surface;
    private $price;
    private $location;
    private $roomNumber;
    private $notaryCosts = 8;

    /**
    * 
    */
    public function __construct($surface, $price, $location, $roomNumber) {
        $this->surface = $surface;
        $this->price = $price;
        $this->location = $location;
        $this->roomNumber = $roomNumber;
    }

    /**
    * 
    */
    public function getSurface () {
        return $this->surface;
    }

    /**
    * 
    */
    public function getPrice() {
        return $this->price;
    }

    /**
    * 
    */
    public function getPriceNC() {
        $priceTTC = $this->price + ($this->price * $this->notaryCosts / 100);

        return $priceTTC;
    }

        /**
    * 
    */
    public function setNotaryCosts($notaryCosts) {
        $this->notaryCosts = $notaryCosts;
    }

    // public function add() {
    //     $db = new DBConfig();
    //     $db->getConnection();
    // }
}