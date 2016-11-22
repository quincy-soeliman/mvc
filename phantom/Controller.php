<?php

namespace Phantom;

abstract class Controller
{
    /**
     * [GET] Returns a View with all Phantoms.
     * @return mixed
     */
    abstract protected function index();

    /**
     * [GET] Returns a View with to create a Phantom.
     * @return mixed
     */
    abstract protected function create();

    /**
     * [POST] Stores a Phantom in the Database.
     * @return mixed
     */
    abstract protected function store();

    /**
     * [GET] Shows a specific Phantom.
     * @return mixed
     */
    abstract protected function show();

    /**
     * [GET] Returns a view to edit a specific Phantom.
     * @return mixed
     */
    abstract protected function edit();

    /**
     * [PUT/PATCH] Updates a specific Phantom.
     * @return mixed
     */
    abstract protected function update();

    /**
     * [DELETE] Destroys a specific Phantom.
     * @return mixed
     */
    abstract protected function destroy();


    /**
     * Returns a view with data.
     * @param $file
     * @param array $data
     * @return int
     */
    protected function view($file, array $data = [])
    {
        require_once(ROOT . '/resources/views/' . $file . '.php');

        return extract($data);
    }
}
