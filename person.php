<?php

class Person{
    public function introduce(){
        echo 'class person' . '<br>';
    }
}


class Student extends Person{
    public function introduce()
    {
        // return parent::introduce();
        parent::introduce();
        echo 'class student' . '<br>';
    }
}


$a = new Student();
$a -> introduce();

?>