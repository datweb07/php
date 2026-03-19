<?php

//trait: giải quyết đa kế thừa trong OOP
trait TraitTest{
    public function indexTraitTest(){
        echo 'TraitTest' . '<br>';
    }
}

trait SubTraitTest{
    public function indexSubTraitTest(){
        echo 'SubTraitTest' . '<br>';
    }
}

class Animal{
    public function speak(){
        echo 'hello' . '<br>';
    }
}

class Dog extends Animal{
    use TraitTest, SubTraitTest;
    public function speak(){
        echo 'gau gau' . '<br>';
    }
}

$dog = new Dog();
$dog -> speak();
$dog -> indexTraitTest();        //load được function trong trait

?>