<?php
/* storage pattern */

namespace App\SBlog\Core;

class Registry
{
    use TSingletone;

    protected static $properties = [];


    public static function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public static function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public static function getProperies()
    {
        return self::$properties;
    }

}
