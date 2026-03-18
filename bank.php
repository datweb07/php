<?php

class Bank
{
    private $balance = 100;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return 'Số dư hiện tại là: ' . $this->balance;
    }

}

$a = new Bank();
$res = $a -> getBalance();

$a -> deposit(100);
$a -> withdraw(50);


echo $res . '<br>';                 // res = 100
echo $a -> getBalance();          //res = 50


?>