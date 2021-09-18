<?php


namespace Classes;


class Prototype
{
    private string $name;

    public function __clone()
    {
        $this->name = "Клон {$this->name}";
    }

    public function set(string $name)
    {
        $this->name = $name;
    }

    public function get(): string
    {
        return $this->name;
    }


}