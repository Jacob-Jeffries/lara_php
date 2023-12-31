<?php

use Core\Router;

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class) {
    
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // dd($class);

    require base_path($class . '.php');
});

$router = new Core\Router;

$routes = require base_path('routes.php');
// dd($router->routes);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// routeToController($uri, $routes);
$router->route($uri, $method);
