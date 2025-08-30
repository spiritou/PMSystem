<?php

namespace app\Controllers;

class UserController
{
    private $userModel;

    private function index()
    {
        $users = $this->userModel->getAllUsers();
        require_once VIEWS_PATH . '/users/index.php';
    }

    private function create()
    {
        require_once VIEWS_PATH . '/users/create.php';
    }
}