<?php

class Bank
{
    public $name;
    public $address;
    
    public function setTax()
    {
        return 10;
    }
}

$bankOne = new Bank;

$bankOne->name = "Santander";
$bankOne->address = "Jose Bonifacio 201";
echo $bankOne->name;