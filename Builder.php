<?php

interface Builder
{
    public function select(...$items);
    public function from($table);
    public function where($expr);
}

class dbBuilder implements Builder
{
    private $text;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->text = new Query();
    }

    public function select(...$items)
    {
        $items = implode(', ', $items);
        $this->text->query .= "SELECT {$items} ";
        return $this;
    }

    public function from($table)
    {
        $this->text->query .= "FROM {$table} ";
        return $this;
    }

    public function where($expr)
    {
        $this->text->query .= "WHERE {$expr} ";
        return $this;
    }

    public function get()
    {
        $result = $this->text->query;
        $this->reset();
        return $result;
    }
}

class Query
{
    public $query = '';
}

$builder = new dbBuilder();
$query = $builder->select('item1', 'item2')->from('table')->where('id = "1"')->get();

echo $query;

