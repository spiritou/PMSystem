<?php

namespace App\Controllers;

class BaseController
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            //header('Location: /login');
            echo "Not logged in. Please log in first.";
            exit();
        }
    }
}