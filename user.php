<?php

class Person {
    public $name;
    public function __construct($name){
        echo 'Construct' . '<br>';
        $this -> name = $name;
    }


    public function show(){
        echo "Name: " . $this -> name . '<br>';
    }
}

$user1 = new Person('dat');
$user1 -> show();

$user2 = new Person('ok');          //tự động gọi construct ở mỗi lần tạo object


?>