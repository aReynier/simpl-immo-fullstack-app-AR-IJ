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
        <form method="POST" action="' . URL_ADMIN_LOGIN . '">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>';
    }

     /**
    * show dashborad after connection
    */
    public function dashboard() {

        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            echo "Access denied. Please login first.";
            return;
        }
        echo "Welcome to the Admin Dashboard!";
        echo '<br><a href="' . URL_ADMIN_LOGOUT . '">Logout</a>'; 
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