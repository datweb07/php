<?php

class Test
{
    private static $bienStatic;

    public function __construct($bienStatic)
    {
        self::$bienStatic = $bienStatic;
    }

    public static function testStatic()
    {
        $ini = 0;
        for ($i = 1; $i <= 5; $i++) {
            $ini += self::$bienStatic;
        }
        return $ini;
    }
}

$test2 = new Test(23);

$test2 = Test::testStatic();
echo $test2 . '<br>';



class HocSinh
{
    public static $soLuongHS = 5;
    public $age;

    public function __construct()
    {
        self::$soLuongHS++;
        echo 'Biến số lượng: ' . self::$soLuongHS . '<br>';
        self::check();
    }

    public static function check(){
        echo 'Số lượng hiện tại là: ' . self::$soLuongHS . '<br>';
    }
}

$hocSinh1 = new HocSinh();
$hocSinh2 = new HocSinh();
// echo 'Số lượng học sinh: ' . HocSinh::$soLuongHS . '<br>';
?>