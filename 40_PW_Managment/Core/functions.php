<?php

require '../Core/Response.php';

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404) {
    http_response_code($code);

    require "../controllers/{$code}.php";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function login($user){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['logged_in'] = TRUE;

    session_regenerate_id(true);

}

function logout(){
    $_SESSION = [];

    session_destroy();

    $cookie = session_get_cookie_params();

    setcookie('PHPSESSID', '', -3600, $cookie['path'], $cookie['domain'], $cookie['httponly']);

}