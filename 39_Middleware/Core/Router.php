<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    // Protected keeps the scope within this class
    protected $routes = [];

    public function add ($method, $uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => NULL,
        ];
        return $this;
    }
    
    public function get($uri, $controller){
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller){
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller){
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller){
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller){
        return $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            // dd($this->routes);
            if($route['uri'] === $uri && $route['method'] === strtoupper($method))
            {
                Middleware::resolve($route['middleware']);
                // if($route['middleware']){
                //     $middleware = Middleware::MAP[$route['middleware']];

                //     (new $middleware)->handle();
                    // if($route['middleware'] === 'guest'){
                    //     (new Guest)->handle();
                    // }

                    // if($route['middleware'] === 'auth'){
                    //     (new Auth)->handle();
                    // }
                // }
                return require base_path($route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($code = 404) {
       http_response_code($code);

        require base_path("/controllers/{$code}.php");

        die();
    }

    public function only($key){
        // dd($key);
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        // dd($this->routes);
        return $this;
    }

};


//  function routeToController($uri, $routes) {
//     if (array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($code = 404) {
//     http_response_code($code);

//     require base_path("/controllers/{$code}.php");

//     die();
// }

// $routes = require base_path('routes.php');
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);
?>