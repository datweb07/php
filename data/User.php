<?php

require_once 'Database.php';

class User{
    private $db;
    public function __construct()
    {
        $this -> db = new Database();
    }

    public function getAll(){
        return $this -> db -> getAll('SELECT * FROM users');
    }

    public function insert($data){
        return $this -> db -> insertData('users', $data);
    }
}

?>