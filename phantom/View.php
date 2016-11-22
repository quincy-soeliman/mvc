<?php

namespace Phantom;

class View
{
    protected $file;

    public function __construct($view)
    {
        $this->file = $view;
    }

    // TODO: Use Twig.
    public function render()
    {
        return require_once(ROOT . '/resources/views/' . $this->file . '.php');
    }
}
