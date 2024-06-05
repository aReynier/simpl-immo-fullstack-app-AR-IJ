<?php

// Load the controllers namespaces
use Controllers\EstateController;
use Controllers\HouseController;
use Controllers\FlatController;
use Controllers\FormController;
use Controllers\AdminController;

require_once __DIR__ . "/config.php";

// Create the controller instances
$flatController = new FlatController();
$estateController = new EstateController();
$houseController = new HouseController();
$formController = new FormController();
$adminController = new AdminController();

// Get the current request URI to get the route asked for by the user
$route = $_SERVER['REQUEST_URI'];

// Use a switch/case to match the request and the controller based on the URI
switch ($route) {
    case URL_HOMEPAGE: // If the URI matches the homepage
        $estateController->index();
        break;
    case URL_ALL_ESTATES: // If the URI matches the customer page displaying all estates
        $estateController->displayAllEstates();
        break;

       case URL_ADMIN_LOGIN: // portail admin
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adminController->authenticate();
        } else {
            $adminController->showLoginForm();
        }
        break;
    case URL_ADMIN_DASHBOARD:
        $adminController->dashboard();
        break;
    case URL_ADMIN_LOGOUT:
        $adminController->logout();
        break;

    case URL_ESTATE_DETAIL: // If the URI matches the customer page displaying one specific estate
        $estateController->displayEstateDetail($id);
        break;

    // case URL_CONTACT_FORM: // If the URI matches the customer contact form
    //     $formController->sendForm();
    //     break;
    // case URL_ADMIN_LOGIN: // If the URI matches the admin login page
    //     $adminController->login();
    //     break;
    case URL_FORM_ADD_ESTATE: // If the URI matches the admin adding estate form
        $estateController->createEstate();
        break;
    // case URL_LIST_ALL_ESTATE: // If the URI matches the admin list of all the estate
    //     $estateController->adminDisplayAllEstate();
    //     break;
    // case URL_EDIT_TARGET_ESTATE: // If the URI matches the edition of an estate
    //     $estateController->editTargetEstate();
    //     break;
    // case URL_DELETE_TARGET_ESTATE: // If the URI matches the deletion of an estate
    //     $estateController->deleteTargetEstate();
    //     break;
    default: // Default, if no route is found
        $estateController->pageNotFound();
}