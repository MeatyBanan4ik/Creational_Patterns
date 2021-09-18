<?php


namespace Classes;


use Interfaces\FactoryInterface;
use Interfaces\ProductInterface;

abstract class AbstractFactory implements FactoryInterface
{
    public function getProductName(): string
    {
        $product = $this->getProduct();
        return $product->name;
    }

    abstract public function getProduct(): ProductInterface;
}