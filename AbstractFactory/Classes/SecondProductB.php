<?php


namespace Classes;


use Interfaces\ProductB;

class SecondProductB implements ProductB
{
    public function getProductB()
    {
        return 'Продукт B 2й фабрики';
    }
}