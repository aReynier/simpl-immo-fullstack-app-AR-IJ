<?php
namespace Repositories;

use PDO;
use Classes\DBConfig;

class EstateRepository extends DBConfig
{
    /**
    * get all the estates
    * return $data
    */
    public function getAllEstates() {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT * FROM Estate");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    /**
    * @param int $id_estate
    * get on specific estate
    * return $data 
    */
    public function getEstateById($id_estate) {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT * FROM Estate WHERE id = :id");

        $req->execute([
            'id' => $id_estate
        ]);

        $data = $req->setFetchMode(PDO::FETCH_OBJ);

        return $req->fetch();
    }

    /**
    * @param mixed $title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning
    * create a new estate 
    */
    public function createEstate($title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning)
    {
        $query = 'INSERT INTO Estate (title, city, description, images, isHouse, type, price, propertySurface, roomNumber, bedroomNumber, energeticPerformance, greenhouseGases, isFurnished, isBalcony, isPool, isCellar, isAirConditioning) 
        VALUES (:title, :city, :description, :images, :isHouse, :type, :price, :propertySurface, :roomNumber, :bedroomNumber, :energeticPerformance, :greenhouseGases, :isFurnished, :isBalcony, :isPool, :isCellar, :isAirConditioning)';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'title' => $title,
            'city' => $city,
            'description' => $description,
            'images' => $images,
            'isHouse' => $isHouse,
            'type' => $type,
            'price' => $price,
            'propertySurface' => $propertySurface,
            'roomNumber' => $roomNumber,
            'bedroomNumber' => $bedroomNumber,
            'energeticPerformance' => $energeticPerformance,
            'greenhouseGases' => $greenhouseGases,
            'isFurnished' => $isFurnished,
            'isBalcony' => $isBalcony,
            'isPool' => $isPool,
            'isCellar' => $isCellar,
            'isAirConditioning' => $isAirConditioning,
        ]);
    }

    /**
    * @param int $id_estate
    * delete an estate based on its id
    */
    public function deleteEstate($id_estate)
    {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("DELETE FROM Estate WHERE id = :id");

        $req->execute([
            'id' => $id_estate
        ]);
    }


    /**
    * @param int $id_estate, $title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning
    * modify a specific estate based on its id
    */
    public function updateEstate($id_estate, $title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning)
    {
        $query = 'UPDATE estate set title = :title, city = :city, description = :description, images = :images, isHouse = :isHouse, type = :type, price = :price, propertySurface = :propertySurface,
        roomNumber = :roomNumber, bedroomNumber = :bedroomNumber, energeticPerformance = :energeticPerformance, greenhouseGases = :greenhouseGases, isFurnished = :isFurnished, isBalcony = :isBalcony, isPool = :isPool, isCellar = :isCellar, isAirConditioning = :isAirConditioning WHERE id = :id';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'id' => $id_estate,
            'title' => $title,
            'city' => $city,
            'description' => $description,
            'images' => $images,
            'isHouse' => $isHouse,
            'type' => $type,
            'price' => $price,
            'propertySurface' => $propertySurface,
            'roomNumber' => $roomNumber,
            'bedroomNumber' => $bedroomNumber,
            'energeticPerformance' => $energeticPerformance,
            'greenhouseGases' => $greenhouseGases,
            'isFurnished' => $isFurnished,
            'isBalcony' => $isBalcony,
            'isPool' => $isPool,
            'isCellar' => $isCellar,
            'isAirConditioning' => $isAirConditioning,
        ]);
    }
}