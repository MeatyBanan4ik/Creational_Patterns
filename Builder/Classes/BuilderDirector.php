<?php


namespace Classes;


use Interfaces\BuilderInterface;

class BuilderDirector
{
    private $builder;

    public function setBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;
        return $this;
    }

    public function createClearProduct()
    {
        return $this->builder->getBuilderProduct();
    }

    public function createSomeProduct()
    {
        return $this->builder->setName('Неполный продукт директора')
            ->setDescription('Это неполный продукт, который вышел из нашего директора')
            ->getBuilderProduct();
    }

    public function createFullProduct()
    {
        return $this->builder->setName('Полный продукт директора')
            ->setDescription('Это полный продукт, который вышел из директора')
            ->setCategories(['Полный', 'Продукт', 'Директора'])
            ->getBuilderProduct();
    }
}