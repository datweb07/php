<?php

class UsersController{
    public function index(){
        $user = new User();

        $userDetail = $user -> getAllUsers();

        require_once 'app/Views/users.php';
        
    }
}

?>