<?php

namespace app\Controllers;

class DashboardController
{
    public function index()
    {
        session_start();
        //require_once VIEWS_PATH . '/dashboard/admin.php';
        if(isset($_SESSION['user_id']) && $_SESSION['role'] === 'admin') {
            require_once VIEWS_PATH . '/dashboard/admin.php';
            //echo "Welcome to the admin dashboard, " . htmlspecialchars($_SESSION['username']) . "!";
        } else {
            header('Location:'. APP_URL . '/login');
            exit();
        }
    }
}