<?php

require 'autoload.php';

use Classes\Singleton;

$S1 = Singleton::getInstance();
$S2 = Singleton::getInstance();

var_dump($S1 === $S2);
