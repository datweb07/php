<?php

class Animal{
    public function speak(){
        echo 'ok';
    }
}

class Dog extends Animal{
    public function speak()
    {
        echo 'gau gau' . '<br>';
    }
}

class Cat extends Animal{
    public function speak()
    {
        echo 'meo meo' . '<br>';
    }
}


$animals = [new Dog(), new Cat()];      //mảng có hai đối tượng
foreach ($animals as $animal){
    $animal -> speak();
}
?>