<?php
namespace App\Middlewares;

class AuthRequiredMiddleware
{
    public function resolve()
    {
        if(empty($_SESSION)){
            header('Location: login');
            http_response_code(302);
            exit;
        }
    }
}