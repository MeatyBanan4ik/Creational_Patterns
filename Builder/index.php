<?php
require 'autoload.php';

echo '<pre>';
$builder = new \Classes\Builder();

$clearProduct = $builder->getBuilderProduct();
print_r($clearProduct);

echo '<br>';

$someProduct = $builder->setName('Почти заполненный продукт')->getBuilderProduct();
print_r($someProduct);

echo '<br>';

$fullProduct = $builder->setName('Полный продукт')
    ->setDescription('В этом продукте будут заполнены все поля')
    ->setCategories(['Полный', 'Продукт'])
    ->getBuilderProduct();
print_r($fullProduct);

echo '<br>';

$director = new \Classes\BuilderDirector();
$director->setBuilder($builder);

print_r($director->createClearProduct());
echo '<br>';

print_r($director->createSomeProduct());
echo '<br>';

print_r($director->createFullProduct());
