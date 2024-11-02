<?php

namespace app\core;

class Router
{
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
    }

    public array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        //todo :: finish resolve method
        $path = $this->request->path();
        $method = $this->request->method();
        $callback = $this->routes[$path][$method] ?? false;

        if(is_array($callback))
        {
            $callback[0] = new $callback[0]();

            return call_user_func($callback);
        }

        echo("NOT FOUND");
        exit;
    }
}