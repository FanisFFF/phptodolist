<?php 
namespace App\Controllers;

use App\Services\UserService;

class AuthController
{
    private UserService $service;
    public function __construct() {
        $this->service = new UserService;
    }
    public function loginView()
    {
        include __DIR__ . '/../view/login.php';
    }
    public function login()
    {
        $this->service->login($_POST);
    }
    public function registerView()
    {
        include __DIR__ . '/../view/register.php';
    }
    public function  register()
    {
         $this->service->create($_POST);
    }
}