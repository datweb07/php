<?php

class UsersController extends BaseController{
    public function index(){
        $user = new User();

        $userDetail = $user -> getAllUsers();

  

        $this -> renderView('users', $userDetail);
        
    }
}

?>