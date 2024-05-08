<?php

class Bank
{
    private $name;
    public $address;
    
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
}

class NationalBank extends Bank
{}

$bankOne = new Bank;

$bankOne->setName("Santander");
$bankOne->address = "Jose Bonifacio 201";
echo $bankOne->getName();

$bankNational = new NationalBank;
$bankNational->setName("XP");
echo $bankNational->getName();