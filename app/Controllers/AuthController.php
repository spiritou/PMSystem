<?php

namespace app\Controllers;

use app\Models\User;

class AuthController
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function login()
    {
        require_once VIEWS_PATH . '/login.php';
    }

    public function authenticate()
    {
        // Handle authentication logic
        $name = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->findByUsername($name);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header('Location: /dashboard'); // Redirect to a protected page
        } else {
            echo "Invalid credentials. Please try again.";
        }

    }

    public function logout()
    {
        // Handle logout logic
    }
}