<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use app\Controllers\AuthController;
use app\Core\Router;
use app\Core\Container;

//$router = new Router();
//$router->get('/login', 'AuthController@login');
//$router->run();

$container = new Container();
$router = $container->get(Router::class);
$router->get('/login', 'AuthController@login');
$router->run();
