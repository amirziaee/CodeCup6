<?php

namespace Core;

class Router
{
    protected $routes = [];

    protected $params = [];

    protected $namespace = 'App\Controllers\\';

    public function add($route , $param)
    {
        list($params['controller'] , $params['method']) = explode('@' , $param);
        $this->routes[$route] = $params;
    }

    public function match($url)
    {
        $url = explode('?' , $url)[0];
        foreach ($this->routes as $route => $params) {
            if($route == $url) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function dispatch($url)
    {
        if($this->match($url)) {
            $controller = $this->params['controller'];
            $controller = $this->getNameSpace() . $controller;
            if(class_exists($controller)) {
                $controller_object = new $controller();
                $method = $this->params["method"];
                if(is_callable([$controller_object , $method])) {
                    echo $controller_object->$method();
                } else {
                    die("Method {$method} (in controller {$controller}) not found");
                }
            } else {
                die("Controller class {$controller} not found");
            }
        } else {
            die("No route matched.");
        }
    }

    public function getNameSpace()
    {
        return $this->namespace;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getParams()
    {
        return $this->params;
    }
}