<?php

class UsersController extends BaseController{
    public function index(){
        $user = new User();

        $userDetail = $user -> getAllUsers();

        ob_start();

        $this -> renderView('layouts-part/users', $userDetail);

        $data = [
            'content' => ob_get_clean()
        ];

        $this -> renderView('layouts/main-layout', $data);   
    }

    public function index2(){
        $user = new User();

        $userDetail = $user -> getAllUsers();

        $data = [
            'content' => 'View index2'
        ];

        $this -> renderView('layouts/main-layout', $userDetail);   
    }
}

?>