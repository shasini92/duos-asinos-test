<?php

namespace App\Core;

use Exception;

// Dependency Injection Container (Service Container)
class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No {key} in the DPC");
        }

        return static::$registry[$key];
    }
}
