<?php
declare(strict_types=1);
namespace App\Services;

use Framework\Database;

class TaskService{
    private Database $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function create(array $formData){
        $data = $formData['task'];
        $sql = "INSERT INTO task (user, task)
        VALUES ('John', '$data')";
        $this->db->query($sql);
    }
    public function delete(array $formData){
        
        $data =$formData['delete'];
        $sql = "DELETE FROM task WHERE id='$data'";
        $this->db->query($sql);
    }
}