<?php
namespace Repositories;

use PDO;
use Classes\DBConfig;

class FlatRepository extends EstateRepository
{
    /**
    * get all the flats
    * return $data
    */
    public function getAllFlats() {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT Flat.*, Estate.* FROM Flat LEFT JOIN Estate ON Flat.flat_estate_id = Estate.id");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    /**
    * @param int $id_flat
    * get all the flats
    * return $data of the specific flat
    */
    public function getFlatById($id_flat) {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("SELECT Flat.*, Estate.* FROM Flat LEFT JOIN Estate ON Flat.flat_estate_id = Estate.id WHERE flat_id = :id");

        $req->execute([
            'id' => $id_flat
        ]);

        $data = $req->setFetchMode(PDO::FETCH_OBJ);

        return $req->fetch();
    }

    /**
    * @param mixed $isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id
    * create a new flat
    */
    public function createFlat($isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id)
    {
        $query = 'INSERT INTO Flat (isDuplex, isElevator, isCaretaker, isBox, flat_estate_id) 
        VALUES (:isDuplex, :isElevator, :isCaretaker, :isBox, :flat_estate_id)';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'isDuplex' => $isDuplex,
            'isElevator' => $isElevator,
            'isCaretaker' => $isCaretaker,
            'isBox' => $isBox,
            'flat_estate_id' => $flat_estate_id,
        ]);
    }

    /**
    * @param int $id_flat
    * delete an flat based on its id
    */
    public function deleteFlat($id_flat)
    {
        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare("DELETE FROM Flat WHERE flat_id = :id");

        $req->execute([
            'id' => $id_flat
        ]);
    }

    /**
    * @param int $flat_id, $isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id
    * modify a specific estate based on its id
    */
    public function updateFlat($flat_id, $isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id)
    {
        $query = 'UPDATE Flat set isDuplex = :isDuplex, isElevator = :isElevator, isCaretaker = :isCaretaker, isBox = :isBox, flat_estate_id = :flat_estate_id WHERE flat_id = :flat_id';

        $db = new DBConfig();
        $db->getConnection();
        $req = $db->connection->prepare($query);

        $req->execute([
            'flat_id' => $flat_id,
            'isDuplex' => $isDuplex,
            'isElevator' => $isElevator,
            'isCaretaker' => $isCaretaker,
            'isBox' => $isBox,
            'flat_estate_id' => $flat_estate_id,
        ]);
    }
}