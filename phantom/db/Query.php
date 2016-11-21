<?php

namespace Phantom\DB;

class Query
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Returns an object with all the $columns of the selected $table.
     * @param $table
     * @param array $columns
     * @return mixed
     */
    public static function select($table, $columns = ['*'])
    {
        $columns = (is_array($columns)) ? implode(', ', $columns) : $columns;

        $query = (new self)->db->query("SELECT {$columns} FROM {$table}");

        return $query->fetchObject();
    }

    // TODO: Create a conditional query.
    public static function where($table, $conditions = [], $columns = ['*'])
    {
//        $query = (new self)
    }
}
