<?php

namespace Phantom\Db;

abstract class Migration
{
    /**
     * Run the migrations.
     * @return mixed
     */
    abstract protected function up();

    /**
     * Reverse the migrations.
     * @return mixed
     */
    abstract protected function down();
}
