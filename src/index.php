<?php
namespace core;

require_once __DIR__ . '/vendor/autoload.php';

use controller\Estate;
use controller\House;
use model\DBConfig;

$dbConfig = new DBConfig();
$pdo = $dbConfig->getConnection();
$flat->create();
// if(class_exists('db\DBConfig')){

// } else {
//     $flat = new Estate( surface:"80", price:"120", location:"Paris", roomNumber:"3");
// }

$blueHouse = new House(surface:"80", price:"120", location:"Paris", roomNumber:"3", field:"200", isPool: true, floor: "5");

echo "La surface est de " . $flat->getSurface() . " mètres carrées.";

?>

<html>
    <p>Le tarif hors frais est de <?php echo $flat->getPrice()?> euros.</p>
    <p>Le tarif avec les frais de notaire est de <?php echo $flat->getPriceNC()?> euros.</p>

    <?php 
   $flat->setNotaryCosts(notaryCosts:10)
   ?>
   <p>Le nouveaut tarif avec frais de notaires est de <?php echo $flat->getPriceNC() ?> euros.</p>
</html>