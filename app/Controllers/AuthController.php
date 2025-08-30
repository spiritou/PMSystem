<?php

namespace app\Controllers;

class AuthController
{
    public function login()
    {
        require_once VIEWS_PATH . '/login.php';
    }

    public function logout()
    {
        // Handle logout logic
    }
}