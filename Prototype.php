<?php
abstract class ProductPrototype
{
    protected string $name;
    protected string $type;


    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

class Notebook extends ProductPrototype
{
    protected string $type = 'Ноутбук';

}

class Automobile extends ProductPrototype
{
    protected string $type = 'Авто';
}

$notebookPrototype = new Notebook();
$notebook = clone $notebookPrototype;
$notebook->setName('Какой то ноутбук');
echo $notebook->getName();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($notebook);

echo '</pre>';
echo '<br>';
echo '<br>';

$automobilePrototype = new Automobile();
$automobile = clone $automobilePrototype;
$automobile->setName('Какой то автомобиль');
echo $automobile->getName();

echo '<br>';
echo '<br>';
echo '<pre>';

print_r($automobile);

echo '</pre>';
