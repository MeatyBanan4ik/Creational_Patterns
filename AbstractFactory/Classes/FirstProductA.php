<?php


namespace Classes;


use Interfaces\ProductA;

class FirstProductA implements ProductA
{
    public function getProductA()
    {
        return 'Продукт А 1й фабрики';
    }
}