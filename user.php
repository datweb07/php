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

class File{
    private $fileName;
    public function __construct($fileName)
    {
        $this -> fileName = $fileName;
        echo 'File name: ' . $this -> fileName . '<br>';
    }

    public function __destruct()
    {
        echo 'Closed file ' . $this -> fileName . '<br>';
    }
}

$file1 = new File('test.pdf');          //tự động gọi construct và destruct
?>