<?php

namespace Phantom\Routing;

class Route
{
    public static function get($url, $controller, $method)
    {
        if (!self::isCurrentUrl($url)) {
            die();
        }

        $class = NAMESPACE_CONTROLLERS . $controller;
        if (!class_exists($class)) {
            die();
        }

        return (new $class)->$method();
    }

    public static function isCurrentUrl($url)
    {
        return $_SERVER['REQUEST_URI'] == $url;
    }
}
