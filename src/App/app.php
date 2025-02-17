<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Middlewares\AuthRequiredMiddleware;
use Framework\Router;

$app = new Router;
$app->add('get','/',[HomeController::class,'home'])->addMiddleware(AuthRequiredMiddleware::class);
$app->add('post','/',[HomeController::class,'add']);
$app->add('delete','/',[HomeController::class,'delete']);
$app->add('get','/login',[AuthController::class,'loginView']);
$app->add('post','/login',[AuthController::class,'login']);
$app->add('get','/register',[AuthController::class,'registerView']);
$app->add('post','/register',[AuthController::class,'register']);;
$path = substr(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH),8);
echo $_SERVER['REQUEST_METHOD'] .'<br>';
echo $path;
$app->dispatch($path);