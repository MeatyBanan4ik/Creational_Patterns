<?php

interface factory
{
    public function getProduct($brand, $price);
}
abstract class product
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

class notebookFactory implements factory
{

    public function getProduct($brand, $price)
    {
        return new notebook($brand, $price);
    }
}

class notebook extends product
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

class phoneFactory implements factory
{
    public function getProduct($brand, $price)
    {
        return new phone($brand, $price);
    }
}

class phone extends product
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


$notebookFactory = new notebookFactory();
$notebook = $notebookFactory->getProduct('Lenovo', 333);
$notebook->getInfo();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($notebook);

echo '</pre>';
echo '<br>';
echo '<br>';

$phoneFactory = new phoneFactory();
$phone = $phoneFactory->getProduct('Samsung', 222);
$phone->getInfo();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($phone);

echo '</pre>';

