<?php

namespace app\Core;

class Router
{
    private $routes = [];

    public function get($path, $controllerAction)
    {
        $this->routes['GET'][$path] = $controllerAction;
    }

    public function post($path, $controllerAction)
    {
        $this->routes['POST'][$path] = $controllerAction;
    }

    public function run()
    {
      $method = $_SERVER['REQUEST_METHOD'];
      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $path = str_replace('/PMSystem/public', '', $path); // Adjust based on your setup
      $controllerAction = $this->routes[$method][$path] ?? null;

      if (isset($controllerAction)) {
        return explode('@', $controllerAction);
        /*list($controller, $action) = explode('@', $controllerAction);
        $controller = "app\\Controllers\\$controller";
        $controllerInstance = new $controller();
        $controllerInstance->$action();*/
      }
        else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}