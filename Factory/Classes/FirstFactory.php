<?php


namespace Classes;


use Interfaces\ProductInterface;

class FirstFactory extends AbstractFactory
{
    public function getProduct(): ProductInterface
    {
        return new FirstFactoryProduct();
    }
}