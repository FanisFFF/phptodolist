<?php
namespace Framework;

class Router
{
    private $routes = [];
    private $middlewares = [];
    public function add(string $method,string $path, array $controller)
    {
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller,
            'middlewares' => []
        ];
        return $this;
    }
    public function dispatch(string $path)
    {
        $method = $_SERVER["REQUEST_METHOD"];   
        $method = strtoupper($_POST['_METHOD'] ?? $method);

   

        foreach($this->routes as $route){
            if($route['path'] == $path&&$route['method']==$method){
              [$class,$function] = $route['controller'];
              $controllerInstance = new $class;
              $action= fn()=>$controllerInstance->{$function}();
              var_dump($this->middlewares);
              foreach($route['middlewares'] as $middleware){
                $middlewareInstance = new $middleware;
                var_dump($middlewareInstance);
                $middlewareInstance->resolve($action);
            }
            $action();
            }
        }

    }
    public function addMiddleware($middleware)
    {
        $lastIndex =  count($this->routes)-1;
        if($lastIndex >= 0 ){
            $this->routes[$lastIndex]['middlewares'][] =  $middleware;
        }
        return $this;
    }
}