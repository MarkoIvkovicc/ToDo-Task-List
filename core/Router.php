<?php

/**
 * Class for handling GET and POST requests from web routes and choose which controller to hit
 *
 * @author     Marko Ivković <markoivkovic16@gmail.com>
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' =>[],
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }
    
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }   

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }   

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI.');
        
    }
}