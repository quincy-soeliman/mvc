<?php

namespace Phantom;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;

abstract class Controller
{
    /**
     * [GET] Returns a View with all Phantoms.
     * @return mixed
     */
    abstract public function index();

    /**
     * [GET] Returns a View with to create a Phantom.
     * @return mixed
     */
    abstract public function create();

    /**
     * [POST] Stores a Phantom in the Database.
     * @return mixed
     */
    abstract public function store();

    /**
     * [GET] Shows a specific Phantom.
     * @return mixed
     */
    abstract public function show();

    /**
     * [GET] Returns a view to edit a specific Phantom.
     * @return mixed
     */
    abstract public function edit();

    /**
     * [PUT/PATCH] Updates a specific Phantom.
     * @return mixed
     */
    abstract public function update();

    /**
     * [DELETE] Destroys a specific Phantom.
     * @return mixed
     */
    abstract public function destroy();


    /**
     * Returns a view with it's $data.
     * @param $file
     * @param array $data
     */
    protected function view($file, array $data = [])
    {
        $loader = new Twig_Loader_Filesystem(ROOT . '/resources/views/');
        $twig = new Twig_Environment($loader, ['debug' => DEBUG_MODE]);

        if (DEBUG_MODE) {
            $twig->addExtension(new Twig_Extension_Debug());
        }

        print $twig->render($file . '.html.twig', $data);
    }

    /**
     * TODO: Create this.
     */
    protected function redirect()
    {
        //
    }
}
