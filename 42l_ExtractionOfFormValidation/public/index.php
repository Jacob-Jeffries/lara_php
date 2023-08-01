<?php
// require '../../vendor/autoload.php';

// const BASE_PATH = __DIR__.'/../';

require '../Core/functions.php';


session_start();

// dd(password_algos());

// Put this before importing Classes! - Using composer autoloader now
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// dd($method);
// dd($uri);

$router->route($uri, $method);

