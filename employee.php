<?php

abstract class Employee{
    public function role(){
        echo 'Employee' . '<br>';
    }

    abstract public function work();
}

//abstract class không khởi tạo được object
// $engineer = new Employee();
// var_dump($engineer);

class Engineer extends Employee{
    public function work()
    {
        echo 'Engineer' . '<br>';
    }
}

class InternEngineer extends Employee{
    
    public function work()
    {
        $this -> role();
        echo 'Intern Engineer';
    }
}

$enginner = new Engineer();
$enginner -> work();

$interEngineer = new InternEngineer();
$interEngineer -> work();
?>