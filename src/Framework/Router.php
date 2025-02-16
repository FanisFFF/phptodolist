<?php
namespace Framework;

class Router
{
    private $routes = [];
    public function add(string $method,string $path, array $controller)
    {
        $this->routes[] = [
            'path'=>$path,
            'method'=>strtoupper($method),
            'controller'=>$controller
        ];
    }
    public function dispatch(string $path)
    {
        $method = $_SERVER["REQUEST_METHOD"];
        $method = strtoupper($_POST['_METHOD'] ?? $method);
        foreach($this->routes as $route){
            if($route['path']==$path&&$route['method']==$method){
              [$class,$function]= $route['controller'];
              $controllerInstance= new $class;
              $controllerInstance->{$function}();
            }
        }
    }
}