<?php


namespace Classes;


use Interfaces\AbstractFactory;
use Interfaces\ProductA;
use Interfaces\ProductB;

class FirstFactory implements AbstractFactory
{
    public function createProductA(): ProductA
    {
        return new FirstProductA();
    }

    public function createProductB(): ProductB
    {
        return new FirstProductB();
    }
}