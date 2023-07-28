<?php

// session_start();

// $_SESSION['name'] = 'Jacob';
// $_SESSION['phone'] = '906-227-2156';

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'Core/functions.php';

// dd(password_algos());

// Put this before importing Classes!
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

