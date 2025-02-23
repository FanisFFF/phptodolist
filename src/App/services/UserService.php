<?php
namespace App\Services;

use Framework\Database;

class UserService
{
    private Database $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function create(array $formData){
        $login = $formData['login'];
        $password = $formData['password'];
        $isLoginFound = $this->isLoginTaken($login);
        if(!$isLoginFound){
            $sql = "INSERT INTO users (login,password)
            VALUES('$login','$password')";
            $this->db->query($sql);
          
            session_regenerate_id();
            $_SESSION['user']=$this->db->id();
            header('Location: /todoapp');
            http_response_code(302);
            exit;
        }
    }
    public function isLoginTaken(string $login){
        $sql = "SELECT id, login,password FROM users
        WHERE login='$login'";
        $user = $this->db->query($sql);
        return $user->num_rows>0;
    }
}