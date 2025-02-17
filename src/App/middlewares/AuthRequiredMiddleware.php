<?php
namespace App\Middlewares;

class AuthRequiredMiddleware
{
    public function resolve(callable $next)
    {
        if(empty($_SESSION)){
            echo 'middleware active';
        }
        $next();
    }
}