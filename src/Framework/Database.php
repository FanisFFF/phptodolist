<?php
namespace Framework;

use \mysqli;
class Database{
    private mysqli $connection;
    public function __construct() {
        $servername = "localhost";
        $password = "";
        $username = "root";
        $dbname = 'todoapp';
        $this->connection = new mysqli($servername,$username,$password,$dbname);
    }
    public function query(string $sql){
        return $this->connection->query($sql);
    }
    public function id(){
        return $this->connection->insert_id;
    }

}