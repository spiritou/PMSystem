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
        require_once VIEWS_PATH . '/auth/login.php';
    }

    public function authenticate()
    {
        // Handle authentication logic
        $name = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->findByUsername($name);

        if ($user && password_verify($password, $user['hashed_pass'])) {
            session_start();
            $_SESSION['user_id'] = $user['users_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            //header('Location: /dashboard'); // Redirect to a protected page
            //echo "Login successful! Welcome, " . htmlspecialchars($user['username']) . ".";
            if ($user['role'] === 'admin') {
                header('Location: /admin-dashboard'); // Redirect to admin dashboard
            } else {
                header('Location: /user-dashboard'); // Redirect to user dashboard
            }
            exit();
        } else {
            echo "Invalid credentials. Please try again.";
        }

    }

    public function logout()
    {
        // Handle logout logic
    }
}