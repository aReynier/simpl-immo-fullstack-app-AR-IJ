<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Controllers\EstateController;
use Controllers\HouseController;
use Controllers\FlatController;
use Controllers\FormController;
use Controllers\AdminController;
use Classes\DBConfig;

// Start a session
session_start();

// Create a new instance of the 'Database' class
$database = new DBConfig();

// Call getDB() method from the Database class
$database->getConnection();

// Import the router.php file to handle the app routing
require_once __DIR__ . "/router.php";
