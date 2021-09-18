<?php
    require 'autoload.php';

$factory1 = (new \Classes\ProductsFactory())->getFactory(1);
echo $firstProductA = $factory1->createProductA()->getProductA();
echo '<br>';
echo $firstProductB = $factory1->createProductB()->getProductB();
echo '<br>';
echo '<br>';



$factory2 = (new \Classes\ProductsFactory())->getFactory(2);
echo $secondProductA = $factory2->createProductA()->getProductA();
echo '<br>';
echo $secondProductB = $factory2->createProductB()->getProductB();
