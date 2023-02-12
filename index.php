<?php

class Account
{
    private $balance = 0;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }
}

$myMoney = new Account();
$myMoney->deposit(40);

echo $myMoney->getBalance() . " is my money currently.<br>";

$myMoney->withdraw(20);


echo "My balance is " . $myMoney->getBalance();


?>