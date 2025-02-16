<?php
namespace App\Controllers;

use App\Services\TaskService;

use function App\redirectTo;

 class HomeController {
    private TaskService $service;
    public function __construct() {
        $this->service = new TaskService;
    }
    public function home() {
        include __DIR__ . '/../view/todo.php';
    }
    public function add(){
        $this->service->create($_POST);
        header('Location: /todoapp');
        http_response_code(302);
        exit;
    }
    public function delete(){
        $this->service->delete($_POST);
        header('Location: /todoapp');
        http_response_code(302);
        exit;
    }
}