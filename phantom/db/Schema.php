<?php

namespace Phantom\DB;

class Schema
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Create the table.
     * @param $table
     * @param $columns
     * @return string
     */
    public static function create($table, $columns)
    {
        (new self)->db->exec("CREATE TABLE IF NOT EXISTS {$table}({$columns})");

        return "Table: {$table} has successfully been created!";
    }

    /**
     * Drop the table.
     * @param $table
     * @return string
     */
    public static function drop($table)
    {
        (new self)->db->exec("DROP TABLE IF EXISTS {$table}");

        return "Table: {$table} has successfully been dropped!";
    }
}
