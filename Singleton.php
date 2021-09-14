<?php
final class Singleton
{

    private static $instance = null;



    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        return rand();
    }

    private function __clone() {}

}



function check($a, $b)
{
    if ($a == $b)
    {
        return 'True';
    }
    else
    {
        return 'False';
    }
}

$S1 = Singleton::getInstance();
$S2 = Singleton::getInstance();

echo check($S1, $S2);

/*
class Simple
{
    private $instance = null;

    public function __construct()
    {
        if ($this->instance == null)
        {
            $this->instance = rand();
        }
        return $this->instance;
    }
}

echo '<br>';

$s1 = new Simple();
$s2 = new Simple();

echo check($s1, $s2);
*/