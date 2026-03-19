<?php

class User extends CoreModel{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers(){
        return $this -> getAll("SELECT * FROM users");
    }

    public function insertUsers($data){
        return $this -> insertData('users', $data);
    }
}

?>