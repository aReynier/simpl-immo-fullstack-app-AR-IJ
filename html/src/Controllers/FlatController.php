<?php

namespace Controllers;

use Services\Response;
use Classes\DBConfig;
use Repositories\FlatRepository;
use PDO;

require_once('EstateController.php');

class FlatController extends EstateController
{
    // public function displayAllFlats() {
    //     $flatRepository = new FlatRepository();
    //     $flats = $flatRepository->getAllFlats();
    //     var_dump($flats);
    // }

    // public function displayOneFlat($flat_id) {
    //     $flatRepository = new FlatRepository();
    //     $flat = $flatRepository->getFlatById($flat_id);
    //     var_dump($flat);
    // }

    // public function createOneFlat($isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id) {
    //     $flatRepository = new FlatRepository();
    //     $flat = $flatRepository->createFlat($isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id);
    // }

    // public function deleteOneFlat($flat_id) {
    //     $flatRepository = new FlatRepository();
    //     $flat = $flatRepository->deleteFlat($flat_id);
    // }

    // public function modifyOneFlat($flat_id, $isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id) {
    //     $flatRepository = new FlatRepository();
    //     $flat = $flatRepository->updateFlat($flat_id, $isDuplex, $isElevator, $isCaretaker, $isBox, $flat_estate_id);
    // }
}