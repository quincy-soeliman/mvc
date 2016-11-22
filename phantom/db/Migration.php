<?php

namespace Phantom\Db;

abstract class Migration
{
    /**
     * Creates the table.
     * @return mixed
     */
    abstract protected function up();

    /**
     * Drops the table.
     * @return mixed
     */
    abstract protected function down();
}
