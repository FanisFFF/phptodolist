<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use Framework\Router;

$app = new Router;
$app->add('get','/',[HomeController::class,'home']);
$app->add('post','/',[HomeController::class,'add']);
$app->add('delete','/',[HomeController::class,'delete']);
$app->add('get','login',[LoginController::class,'login']);
$path = substr(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH),8);
echo $_SERVER['REQUEST_METHOD'] .'<br>';
echo $path;
$app->dispatch($path);