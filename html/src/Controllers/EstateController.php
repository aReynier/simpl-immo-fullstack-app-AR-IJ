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
        echo "Here is all estates";
    }

    // public function login(){
    //     echo "Admin Portail";
    //     $adminRepository = new AdminRepository();
    //     $admin= $adminRepository->getAdmin();
    //     var_dump($admin);
    // }


        public function createEstate() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title = $_POST['title'];
                $city = $_POST['city'];
                $description = $_POST['description'];
                $images = $_POST['images'];
                $isHouse = isset($_POST['isHouse']) ? 1 : 0;
                $type = $_POST['type'];
                $price = $_POST['price'];
                $propertySurface = $_POST['propertySurface'];
                $roomNumber = $_POST['roomNumber'];
                $bedroomNumber = $_POST['bedroomNumber'];
                $energeticPerformance = $_POST['energeticPerformance'];
                $greenhouseGases = $_POST['greenhouseGases'];
                $isFurnished = isset($_POST['isFurnished']) ? 1 : 0;
                $isBalcony = isset($_POST['isBalcony']) ? 1 : 0;
                $isPool = isset($_POST['isPool']) ? 1 : 0;
                $isCellar = isset($_POST['isCellar']) ? 1 : 0;
                $isAirConditioning = isset($_POST['isAirConditioning']) ? 1 : 0;
    
                $estateRepository = new EstateRepository();
                $estateRepository->createEstate($title, $city, $description, $images, $isHouse, $type, $price, $propertySurface, $roomNumber, $bedroomNumber, $energeticPerformance, $greenhouseGases, $isFurnished, $isBalcony, $isPool, $isCellar, $isAirConditioning);
                $viewData = ['estateRepository' => $estateRepository];
         
                header("Location: " . URL_HOMEPAGE); 
                exit();
            } else {
                $viewData=[];
                $this->render('Components/HeaderComponent');
                $this->render('Dashboard/AddEstate', $viewData);
                $this->render('Components/FooterComponent');
            }
         
    }

    public function pageNotFound() {
        
    }
}