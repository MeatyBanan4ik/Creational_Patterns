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
    }

    public function from($table)
    {
        $this->text->query .= "FROM {$table} ";
    }

    public function where($expr)
    {
        $this->text->query .= "WHERE {$expr} ";
    }

    public function get()
    {
        $result = $this->text->query;
        $this->reset();
        debug_print_backtrace();
        echo '<br>';
        return $result;
    }
}

class Query
{
    public $query = '';
}

$builder = new dbBuilder();
$query = $builder;
$query->select('item1', 'item2');
$query->from('tableName');
$query->where('a = b');

echo $query->get();

