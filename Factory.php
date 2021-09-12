<?php

interface Factory
{
    public function getProduct($brand, $price);
}
abstract class Product
{
    protected string $brand;
    protected float $price;

    public function __construct($brand, $price)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    abstract public function getInfo();
}

class NotebookFactory implements Factory
{

    public function getProduct($brand, $price)
    {
        return new Notebook($brand, $price);
    }
}

class Notebook extends Product
{

    public function __construct($brand, $price)
    {
        parent::__construct($brand, $price);
    }


    public function getInfo()
    {
        echo "Ноутбук:<br>Бренд: {$this->brand}, цена: {$this->price}";
    }
}

class PhoneFactory implements Factory
{
    public function getProduct($brand, $price)
    {
        return new phone($brand, $price);
    }
}

class Phone extends Product
{
    public function __construct($brand, $price)
    {
        parent::__construct($brand, $price);
    }

    public function getInfo()
    {
        echo "Телефон:<br>Бренд: {$this->brand}, цена: {$this->price}";
    }
}


$notebookFactory = new NotebookFactory();
$notebook = $notebookFactory->getProduct('Lenovo', 333);
$notebook->getInfo();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($notebook);

echo '</pre>';
echo '<br>';
echo '<br>';

$phoneFactory = new PhoneFactory();
$phone = $phoneFactory->getProduct('Samsung', 222);
$phone->getInfo();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($phone);

echo '</pre>';

