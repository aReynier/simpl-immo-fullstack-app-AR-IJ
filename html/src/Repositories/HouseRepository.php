<?php
namespace Repositories;

use PDO;
use Classes\DBConfig;

class HouseRepository extends EstateRepository
{
    /**
    * get all the houses
    * return $data
    */
    public function getAllHouses() {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT House.*, Estate.* FROM House LEFT JOIN Estate ON House.house_estate_id = Estate.id");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    /**
    * @param int $id_house
    * get all the houses
    * return $data of the specific house
    */
    public function getHouseById($id_house) {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT House.*, Estate.* FROM House LEFT JOIN Estate ON House.house_estate_id = Estate.id WHERE house_id = :id");

        $req->execute([
            'id' => $id_house
        ]);

        $data = $req->setFetchMode(PDO::FETCH_OBJ);

        return $req->fetch();
    }

    /**
    * @param mixed $fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id
    * create a new house
    */
    public function createHouse($fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id)
    {
        $query = 'INSERT INTO House (fieldSurface, floorNumber, isGarage, isGarden, isTerrace, house_estate_id) 
        VALUES (:fieldSurface, :floorNumber, :isGarage, :isGarden, :isTerrace, :house_estate_id)';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'fieldSurface' => $fieldSurface,
            'floorNumber' => $floorNumber,
            'isGarage' => $isGarage,
            'isGarden' => $isGarden,
            'isTerrace' => $isTerrace,
            'house_estate_id' => $house_estate_id,
        ]);
    }

    /**
    * @param int $id_house
    * delete an house based on its id
    */
    public function deleteHouse($id_house)
    {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("DELETE FROM House WHERE house_id = :id");

        $req->execute([
            'id' => $id_house
        ]);
    }

    /**
    * @param int $house_id, $title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning
    * modify a specific estate based on its id
    */
    public function updateHouse($house_id, $fieldSurface, $floorNumber, $isGarage, $isGarden, $isTerrace, $house_estate_id)
    {
        $query = 'UPDATE House set fieldSurface = :fieldSurface, floorNumber = :floorNumber, isGarage = :isGarage, isGarden = :isGarden, isTerrace = :isTerrace WHERE house_id = :house_id';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'house_id' => $house_id,
            'fieldSurface' => $fieldSurface,
            'floorNumber' => $floorNumber,
            'isGarage' => $isGarage,
            'isGarden' => $isGarden,
            'isTerrace' => $isTerrace,
        ]);
    }
}