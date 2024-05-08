<?php

interface Money 
{
    public function getMoney();
}

class Bank implements Money
{
    private $name;
    public $address;
    public $balance;
    
    public function setTax()
    {
        return 10;
    }
    public function setName($name)
    {
        $this->name =  'banco ' . $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getMoney()
    {
        return $this->balance;
    }
}

class NationalBank extends Bank
{
    public function getMoney()
    {
        return "R$ " . $this->balance;
    }
}


class InternationalBank extends Bank
{
    public function getMoney()
    {
        return "USD " . $this->balance;
    }
}

$bankNational = new NationalBank;
$bankNational->balance = 100;
$bankInternational = new InternationalBank;
$bankInternational->balance = 100;

echo $bankInternational->getMoney() . " |" . $bankNational->getMoney();