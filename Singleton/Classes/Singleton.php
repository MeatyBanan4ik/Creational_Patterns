<?php

namespace Classes;

class Singleton
{
    private static $instance;

    //Комментарий

    public static function getInstance(): Singleton
    {
        if (self::$instance == null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}

}