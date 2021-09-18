<?php


namespace Classes;


use Interfaces\ProductInterface;

class FirstFactoryProduct implements ProductInterface
{
    public string $name;

    public function __construct()
    {
        $this->name = 'Продукт 1й фабрики';
    }
}