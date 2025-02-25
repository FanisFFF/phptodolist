<?php
declare(strict_types=1);
namespace App\Services;

use Framework\Database;

class TaskService{
    private Database $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function get(){
        $user = $_SESSION['user'];
        $sql = "SELECT id,task from task
        WHERE user_id='$user'";
        $result =  $this->db->query($sql);
        $data = $result->fetch_all();
        var_dump($data);
        return $data;
        // extract($data);
    }
    public function create(array $formData){
        $data = $formData['task'];
        $id = $_SESSION['user'];
        $sql = "INSERT INTO task (user, task,user_id)
        VALUES ('John', '$data','$id')";
        $this->db->query($sql);
    }
    public function delete(array $formData){
        
        $data =$formData['delete'];
        $sql = "DELETE FROM task WHERE id='$data'";
        $this->db->query($sql);
    }
}