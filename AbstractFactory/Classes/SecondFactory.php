<?php


namespace Classes;


use Interfaces\AbstractFactory;
use Interfaces\ProductA;
use Interfaces\ProductB;

class SecondFactory implements AbstractFactory
{
    public function createProductA(): ProductA
    {
        return new SecondProductA();
    }

    public function createProductB(): ProductB
    {
        return new SecondProductB();
    }
}