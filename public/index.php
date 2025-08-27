<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use app\Controllers\AuthController;
use app\Core\Router;

$router = new Router();
$router->get('/login', 'AuthController@login');
$router->run();
