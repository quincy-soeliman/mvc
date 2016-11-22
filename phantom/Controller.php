<?php

namespace Phantom;

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
     * Returns a view with data.
     * @param $file
     * @param array $data
     */
    protected function view($file, array $data = [])
    {
        extract($data);
        require_once(ROOT . '/resources/views/' . $file . '.php');
    }

    /**
     * TODO: Create this.
     */
    protected function redirect()
    {
        //
    }
}
