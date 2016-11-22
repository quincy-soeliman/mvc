<?php

namespace App\Controllers;

use Phantom\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return $this->view('tasks', [
          'tasks' => Task::get(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

}
