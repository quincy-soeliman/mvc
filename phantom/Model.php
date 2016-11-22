<?php

namespace Phantom;

use PDO;
use Phantom\DB\Database;

class Model
{
    protected $db;
    protected $model;
    protected $table;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->model = $this->getModel();
        $this->table = $this->getPlural(strtolower($this->model));
    }

    /**
     * Returns the name of the current Model.
     * @return mixed
     */
    protected function getModel()
    {
        $namespace = explode("\\", get_called_class());
        return array_pop($namespace);
    }

    /**
     * Returns the plural of $name.
     * @param $name
     * @return string
     */
    protected function getPlural($name)
    {
        // TODO: Fix this
        switch (rtrim($name)) {
            case substr($name, -1) == 'e' || substr($name, -1) == 'o':
                return $name . 's';
            case substr($name, -1) == 'y':
                return rtrim($name, 'y') . 'ies';
            default:
                return $name . 's';
        }
    }

    /**
     * Returns an object of all the $columns from the Model.
     * @param array $columns
     * @return mixed
     */
    public static function get($columns = ['*'])
    {
        $columns = (is_array($columns)) ? implode(', ', $columns) : $columns;

        $instance = new static;
        $query = (new self)->db->query("SELECT {$columns} FROM {$instance->table}");

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
