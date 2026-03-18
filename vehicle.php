<?php

class vehicle{
    public $brand;
    public function index(){
        echo 'Loading...' . '<br>';
    }
    public function setBrand($brand){
        $this -> brand = $brand;
    }
    
    public function getBrand(){
        return $this -> brand;
    }
}

class Car extends vehicle{
    public $model;

     public function index(){
        echo 'Oke...' . '<br>';
    }

    public function setModel($model){
        $this -> model = $model;
    }

    public function getInfo(){
        echo 'Hãng xe: ' . $this -> brand . ', Phiên bản: ' . $this -> model;
    }
}


$myCar = new Car();
$myCar -> setBrand('Toyota');
$myCar -> setModel('TY - 1990');

$myCar -> index();          //ghi đè phương thức của class cha (Vehicle)
$myCar -> getInfo();


?>