<?php

namespace Phantom\DB;

use PDO;
use PDOException;

class Database
{
    private $db;

    private function __construct()
    {
        try {
            $this->db = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage();
            die();
        }
    }

    public static function connect()
    {
        static $inst = null;

        if ($inst === null) {
            $inst = new Database();
        }

        return $inst;
    }
}
