<?php

require_once __DIR__ . '/../vendor/autoload.php';

$path = $_SERVER['PATH_INFO'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'];
$key = "$method|$path";

$routes = require_once __DIR__ . '/../config/routes.php';


if(array_key_exists($key, $routes)) {
    $controllerRoute = $routes[$key];
    $class = $controllerRoute[0];
    $method = $controllerRoute[1];

    $controller = new $class();
    $controller->$method();
} else {
    http_response_code(404);
}