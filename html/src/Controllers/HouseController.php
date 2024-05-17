<?php

namespace Controllers;

use Services\Response;
use Classes\DBConfig;
use Repositories\HouseRepository;
use PDO;

require_once('EstateController.php');

class HouseController extends EstateController
{
/**
* @param
*
*/
    // public function __construct($propertySurface, $price, $city, $roomNumber, private ?string $field, private bool $isPool, private int $floor){
    //    parent::__construct($propertySurface, $price, $city, $roomNumber); 
    //     // ou ...func_get_arg
       
    // }

    public function displayAllHouses() {
        $houseRepository = new HouseRepository();
        $houses = $houseRepository->getAllHouses();
        var_dump($houses);
    }

    public function displayOneHouse($house_id) {
        $houseRepository = new HouseRepository();
        $house = $houseRepository->getHouseById($house_id);
        var_dump($house);
    }

    public function createOneHouse($fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id) {
        $houseRepository = new HouseRepository();
        $house = $houseRepository->createHouse($fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id);
    }

    public function deleteOneHouse($house_id) {
        $houseRepository = new HouseRepository();
        $house = $houseRepository->deleteHouse($house_id);
    }

    public function modifyOneHouse($house_id, $fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id) {
        $houseRepository = new HouseRepository();
        $house = $houseRepository->updateHouse($house_id, $fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id);
    }
}