<?php


namespace Classes;


use Interfaces\ProductInterface;

class SecondFactoryProduct implements ProductInterface
{
    public string $name;

    public function __construct()
    {
        $this->name = 'Продукт 2й фабрики';
    }
}