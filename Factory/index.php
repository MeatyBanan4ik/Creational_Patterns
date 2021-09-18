<?php
require 'autoload.php';

$factory1 = new \Classes\FirstFactory();
echo $factory1->getProductName();
echo '<br>';
echo '<br>';

$factory2 = new \Classes\SecondFactory();
echo $factory2->getProductName();