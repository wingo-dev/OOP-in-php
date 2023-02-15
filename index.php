<?php
// autoload

function loader($class)
{
    $filename = $class . '.php';
    if (!file_exists($filename)) {
        return false;
    }
    include $filename;
}

spl_autoload_register('loader');

$myMoney = new Account();
$myMoney->deposit(40);

echo $myMoney->getBalance() . " is my money currently.<br>";
$myMoney->withdraw(20);
echo "My balance is " . $myMoney->getBalance();

// card class test
$ccObj = new CreditCard;
$ccObj->setPin("3344");
$ccObj->shopping("1111222233334444", "3344", 490);
$ccObj->getTotalBalance();


// interface test

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound();
echo $cat->makeSound();
