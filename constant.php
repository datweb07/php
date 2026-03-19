<?php

class Constant
{
    const PI = 3.14;
    const NAME = 'Dat';
    const AGE = 23;

    //cách gọi giống static
    public function showInfo()
    {
        echo 'Hằng số PI: ' . self::PI . '<br>';
        echo 'Hằng số NAME: ' . self::NAME . '<br>';
        echo 'Hằng số AGE: ' . self::AGE . '<br>';
    }
}

$test = new Constant();
$test -> showInfo();

echo 'In bên ngoài class: ' . Constant::PI;
?>