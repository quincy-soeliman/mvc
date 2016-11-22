<?php

namespace Phantom\Routing;

class Route
{
    /**
     * Fires a $method of the $controller if $url meets the current url.
     * @param $url
     * @param $args
     *      = {$controller}@{$method}
     * @return mixed
     */
    public static function get($url, $args)
    {
        if (!self::isCurrentUrl($url)) {
            return die();
        }

        $controller = explode('@', $args);

        $class = NAMESPACE_CONTROLLERS . $controller[0];
        if (!class_exists($class)) {
            return die('Controller Class could not be found.');
        }

        return (new $class)->{$controller[1]}();
    }

    /**
     * Checks if $url is equal to the current url.
     * @param $url
     * @return bool
     */
    public static function isCurrentUrl($url)
    {
        return $_SERVER['REQUEST_URI'] == $url;
    }
}
