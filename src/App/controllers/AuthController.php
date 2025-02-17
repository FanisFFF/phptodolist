<?php 
namespace App\Controllers;

class AuthController
{
    public function loginView()
    {
        include __DIR__ . '/../view/login.php';
    }
    public function login()
    {
        var_dump($_POST);
    }
    public function registerView()
    {
        include __DIR__ . '/../view/register.php';
    }
    public function  register()
    {
        var_dump($_POST);    
    }
}