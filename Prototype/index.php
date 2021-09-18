<?php
require 'autoload.php';

$p1 = new \Classes\Prototype();
$p1->set('Прототип1');
echo $p1->get();

echo '<br>';

$p2 = clone $p1;
echo $p2->get();