<?php

namespace app\Controllers;

use app\Models\User;

class UserController
{
    private $userModel;

    public function __construct(User $userModel)
    {
        // Initialize User model or any dependencies here
        $this->userModel = $userModel;
    }

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