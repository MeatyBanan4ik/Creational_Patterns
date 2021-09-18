<?php


namespace Classes;


use Interfaces\ProductA;

class SecondProductA implements ProductA
{
    public function getProductA()
    {
        return 'Продукт А 2й фабрики';
    }
}