<?php


namespace Classes;


use Interfaces\AbstractFactory;

class ProductsFactory
{

    public function getFactory(int $num): AbstractFactory
    {
        switch ($num)
        {
            case 1:
                $factory = new FirstFactory();
                break;
            case 2:
                $factory = new SecondFactory();
                break;
            default:
                throw new \Exception("У нас не так много фабрик");
        }

        return $factory;
    }

}