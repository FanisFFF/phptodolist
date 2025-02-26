<?php
namespace App\Controllers;

use App\Services\TaskService;

 class HomeController {
    private TaskService $service;
    public function __construct() {
        $this->service = new TaskService;
        
    }
    public function home() {
        $data =  $this->service->get();
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
    public function editView(){
        $id = substr(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH),9);
        $data = $this->service->getById($id);
        var_dump($data);
        include __DIR__ .'/../view/edit.php';

    }
    public function edit(){
        $this->service->edit($_POST);
        header('Location: /todoapp');
        http_response_code(302);
        exit;
    }
}