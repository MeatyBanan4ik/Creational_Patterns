<?php


namespace Classes;


use Interfaces\ProductInterface;

class SecondFactory extends AbstractFactory
{
    public function getProduct(): ProductInterface
    {
        return new SecondFactoryProduct();
    }
}