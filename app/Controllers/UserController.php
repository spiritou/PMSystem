<?php

namespace app\Controllers;

class UserController
{
    private $userModel;

    public function displayusers()
    {
        session_start();
        if(isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin') {
        $users = $this->userModel->getAllUsers();
        require_once VIEWS_PATH . '/users/usersmanagement.php';
        }
    }

    public function create()
    {
        require_once VIEWS_PATH . '/users/create.php';
    }
}