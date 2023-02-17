<?php
// Encapsulation classes.
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

class CreditCard
{
    const CARDNUMBER = "19920225";
    private $totalBalance = 1000;
    private $pinNumber = "1111";

    public function getCardNumber()
    {
        return self::CARDNUMBER;
    }

    public function getTotalBalance()
    {
        return $this->totalBalance;
    }

    private function setTotalBalance($balance)
    {
        $this->totalBalance = $balance;
    }

    public function setPin($newPin)
    {
        if (preg_match("/^[1-9]\d{3}$/", $newPin)) {
            $this->pinNumber = $newPin;
        } else {
            echo "Pin number should be a string of 4 digits.";
        }
    }

    public function getPin()
    {
        return $this->pinNumber;
    }

    public function shopping($cardNumber, $pinNumber, $spendingMoney)
    {
        if ($cardNumber === $this->getCardNumber() && $pinNumber === $this->getPin) {
            if ($spendingMoney <= $this->getTotalBalance()) {
                $remainBalance = $this->getTotalBalance - $spendingMoney;
                $this->setTotalBalance($remainBalance);
            } else {
                echo "you do not have enough money to buy the thing.:P";
            }
        } else {
            echo "your card is invalid.";
        }
    }

}

// interfaces
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        return "Bark";
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        return "Meow";
    }
}

class Student implements Serializable
{
    private $name;
    private $id;

    public function __constructor($name, $id)
    {
        $this->name = $name;
        $this->id = $id;

    }

    public function getInfo()
    {
        return "Name: " . $this->name . ", ID: " . $this->id;
    }

    public function serialize()
    {
        return serialize([$this->name, $this->id]);
    }
    public function unserialize($data)
    {
        list($this->name, $this->id) = unserialize($data);
    }
    // public function __sleep()
    // {
    //     echo "It is serialize test!";

    // }
}