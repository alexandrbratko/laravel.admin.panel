<?php

namespace App\SBlog\Core;

class BlogApp
{
    public static $app;

    public static function getInstance() {
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }

    /**
     * @return mixed
     */
    public static function getParams()
    {
        $params = require CONF . '/params.php';
        if(!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
        return self::$app;
    }
}
