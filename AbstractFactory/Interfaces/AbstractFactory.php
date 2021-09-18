<?php


namespace Interfaces;


interface AbstractFactory
{
    public function createProductA(): ProductA;

    public function createProductB(): ProductB;

}