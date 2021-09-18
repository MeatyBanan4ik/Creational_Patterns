<?php


namespace Classes;


use Interfaces\ProductB;

class FirstProductB implements ProductB
{
    public function getProductB()
    {
        return 'Продукт B 1й фабрики';
    }
}