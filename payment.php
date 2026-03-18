<?php

interface Payment
{
    public function banking($amount);
    public function sender($name);
}

class MoMo implements Payment
{
    public function banking($amount)
    {
        echo 'Dã chuyển: ' . $amount . '$ bằng MoMo' . '<br>';
    }

    public function sender($name)
    {
        echo 'Người gửi là: ' . $name . '<br>';
    }
}

$user = new MoMo();
$user->banking(100);
$user->sender('dat');

?>