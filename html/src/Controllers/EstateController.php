<?php

namespace Controllers;

use Repositories\AdminRepository;
use Services\Response;
use Classes\DBConfig;
use Repositories\EstateRepository;
use PDO;

/**
* 
*/
class EstateController {
    use Response;

    // private $propertySurface;
    // private $price;
    // private $city;
    // private $roomNumber;
    // private $notaryCosts = 8;

    // /**
    // * 
    // */
    
    // public function __construct($propertySurface, $price, $city, $roomNumber) {
    //     $this->propertySurface = $propertySurface;
    //     $this->price = $price;
    //     $this->city = $city;
    //     $this->roomNumber = $roomNumber;
    // }

    /**
    * 
    */
    public function index() {
        $estateRepository = new EstateRepository();
        $estates = $estateRepository->getAllEstates();
        // var_dump($estates);
        $viewData = ['estates' => $estates];
        $this->render('Components/HeaderComponent');
        $this->render('EstateViews/HomePageTemplate', $viewData);
        // $this->render('EstateViews/HomePageTemplate', get_defined_vars() );
        $this->render('Components/FooterComponent');
     }

    //  public function view($view, $data=[])
    //     {
    //         extract($data);
    //         require_once "./mvc/views/".$view.".php";
    //     }

    public function displayAllEstates() {
        $estateRepository = new EstateRepository();
        $estates = $estateRepository->getAllEstates();
        $viewData = ['estates' => $estates];
        $this->render('Components/HeaderComponent');
        $this->render('EstateViews/EstateList', $viewData);
        $this->render('Components/FooterComponent');
    }

    // public function login(){
    //     echo "Admin Portail";
    //     $adminRepository = new AdminRepository();
    //     $admin= $adminRepository->getAdmin();
    //     var_dump($admin);
    // }

    public function displayEstateDetail() {
        
    }

    public function pageNotFound() {
        
    }
}