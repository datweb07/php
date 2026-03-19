<?php

//final: giúp ngăn chặn việc ghi đè trong php
// final class: class này không thể bị class khác kế thừa
// final function: ngăn việc ghi đè function

class FinalTest{
    protected $test;
    public final function info($test){
        echo $this -> test = $test;
    }
}

$test = new FinalTest();
$test -> info('Love You');

class SubFinalTest extends FinalTest{
    // 
    //  hàm này sẽ báo lỗi vì không thể override final function
    //
    // public function info($test){
    //     echo $this -> test = $test;
    // }
}
?>