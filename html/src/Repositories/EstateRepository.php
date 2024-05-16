<?php
namespace Repositories;

use PDO;
use Classes\DBConfig;

class EstateRepository extends DBConfig
{
    public function getAllEstates() {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT * FROM Estate");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

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

    public function createEstate($title, $city, $description, $images, $category, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning)
    {
        $query = 'INSERT INTO Estate (title, city, description, images, category, type, price, propertySurface, roomNumber, bedroomNumber, energeticPerformance, greenhouseGases, isFurnished, isBalcony, isPool, isCellar, isAirConditioning) 
        VALUES (:title, :city, :description, :images, :category, :type, :price, :propertySurface, :roomNumber, :bedroomNumber, :energeticPerformance, :greenhouseGases, :isFurnished, :isBalcony, :isPool, :isCellar, :isAirConditioning)';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'title' => $title,
            'city' => $city,
            'description' => $description,
            'images' => $images,
            'category' => $category,
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

    public function deleteEstate($id_estate)
    {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("DELETE FROM Estate WHERE id = :id");

        $req->execute([
            'id' => $id_estate
        ]);
    }

    public function updateEstate($id_estate, $title, $city, $description, $images, $category, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning)
    {
        $query = 'UPDATE estate set title = :title, city = :city, description = :description, images = :images, category = :category, type = :type, price = :price, propertySurface = :propertySurface,
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
            'category' => $category,
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