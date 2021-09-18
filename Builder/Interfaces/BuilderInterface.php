<?php


namespace Interfaces;


use Classes\BuilderProduct;

interface BuilderInterface
{
    public function create(): BuilderInterface;

    public function setName(string $name): BuilderInterface;

    public function setDescription(string $description): BuilderInterface;

    public function setCategories(array $categories): BuilderInterface;

    public function getBuilderProduct(): BuilderProduct;

}