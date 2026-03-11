<?php

class Person {
    public $name = 'dat';
    private $password = '123';
    protected $email = 'dat123@gmail.com';

    public function show(){
        echo "Name: " . $this -> name . '<br>';
        echo "Password: " . $this -> password . '<br>';
        echo "Email: " . $this -> email . '<br>';
    }
}

$user = new Person();
$user -> show();


?>