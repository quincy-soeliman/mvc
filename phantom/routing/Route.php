<?php

namespace Phantom\Routing;

class Route
{
    protected $url;

    public function __construct()
    {
        //
    }

    public static function get($url, $controller, $method)
    {
        (new self)->$url = $url;
    }
}
