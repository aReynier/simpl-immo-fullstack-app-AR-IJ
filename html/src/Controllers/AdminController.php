<?php

namespace Controllers;

use Repositories\AdminRepository;

class AdminController {

    public function __construct() {
    }

    public function login() {
        echo "Admin Portail";
        $adminRepository = new AdminRepository();
        $admin = $adminRepository->getAdmin();
        var_dump($admin);
    }

    /**
    * post $login and $password
    * verify and authentify, redirct & errors
    */
    public function authenticate() {
  
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $adminRepository = new AdminRepository();
            $admins = $adminRepository->getAdmin();

            foreach ($admins as $admin) {
                if ($admin->login === $login && $admin->password === $password) {
                    // Enregistrer l'user dans la session
                    $_SESSION['admin_logged_in'] = true;

                    header('Location: ' . URL_ADMIN_DASHBOARD);
                    exit;
                }
            }
            echo "Invalid login or password, try again !";
        } else {
            echo "Please enter both login and password.";
        }
    }

     /**
    * show connexion form
    */
    public function showLoginForm() {
        // formulaire de connexion
        echo '
        <div style="max-width: 600px; margin: auto; padding: 1em; border: 1px solid #ccc;">
    <form method="POST" action="' . URL_ADMIN_LOGIN . '">
            <label for="login" style="display: block; margin-bottom: 1em;">Login:</label>
            <input type="text" id="login" name="login" required style="width: 100%; padding: 0.5em; margin-bottom: 1em; border: 1px solid #ccc;">
            <label for="password" style="display: block; margin-bottom: 0.5em;">Password:</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 0.5em; margin-bottom: 1em; border: 1px solid #ccc;">
            <button type="submit" style="width: 100%; padding: 0.5em; background-color: orange; color: white;">
            Login</button>
    </form>
</div>';
    }

     /**
    * show dashborad after connection
    */
    public function dashboard() {

        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            echo "Access denied. Please login first.";
            return;
        }
        echo '<div style="max-width: 600px; margin: auto; padding: 1em; border: 1px solid #ccc;">
        <h2>Welcome to the Admin Dashboard!</h2>
        <br><a href="' . URL_ADMIN_LOGOUT . '">Logout</a>; 
        <br><a href="' . URL_FORM_ADD_ESTATE . '"> Ajouter une annonce </a></div>'; 

    }

    /**
    * logout and redirect
    */
    public function logout() {
        session_destroy();
        header('Location: ' . URL_ADMIN_LOGIN);
        exit;
    }
}