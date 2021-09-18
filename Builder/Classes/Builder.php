<?php


namespace Classes;


use Interfaces\BuilderInterface;

class Builder implements BuilderInterface
{
    private $builderProduct;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BuilderInterface
    {
        $this->builderProduct = new BuilderProduct();
        return $this;
    }

    public function setName(string $name): BuilderInterface
    {
        $this->builderProduct->name = $name;
        return $this;
    }

    public function setDescription(string $description): BuilderInterface
    {
        $this->builderProduct->description = $description;
        return $this;
    }

    public function setCategories(array $categories): BuilderInterface
    {
        $this->builderProduct->categories = $categories;
        return $this;
    }

    public function getBuilderProduct(): BuilderProduct
    {
        $result = $this->builderProduct;
        $this->create();

        return $result;
    }
}