<?php
namespace Classes;

interface Product
{
    public function getName();
}

abstract class AbstractFactory
{
    public static function choseProduct($name)
    {
        switch (strtolower($name))
        {
            case 'food':
                return new FoodFactory();
            case 'clothes':
                return new ClothesFactory();
            default:
                exit('Что то пошло не по плану');
        }
    }

    abstract public function getProduct();
}

class FoodFactory extends AbstractFactory
{
    public function getProduct()
    {
        return new Food();
    }
}

class Food implements Product
{
    public function getName()
    {
        return "Какая то еда";
    }
}

class ClothesFactory extends AbstractFactory
{
    public function getProduct()
    {
        return new Clothes();
    }
}

class Clothes implements Product
{
    public function getName()
    {
        return "Какая то одежда";
    }
}

$food = AbstractFactory::choseProduct('food')->getProduct();
echo $food->getName();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($food);

echo '</pre>';
echo '<br>';
echo '<br>';

$clothes = AbstractFactory::choseProduct('clothes')->getProduct();
echo $clothes->getName();

echo '<br>';
echo '<br>';
echo '<pre>';
print_r($clothes);
echo '</pre>';

