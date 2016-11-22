<?php

// Load all the configuration.
require_once('../config.php');

// Load Composer's autoload.
require ROOT . '/vendor/autoload.php';

use App\Models\Task;

var_dump(Task::get());

use Phantom\View;

(new View('test'))->render();
