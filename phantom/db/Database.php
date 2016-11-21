<?php

namespace Phantom\DB;

use PDO;
use PDOException;

class Database
{
    protected static $db;

    private function __construct()
    {
        try {
            self::$db = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage();
            die();
        }
    }

    /**
     * Returns one instance of the Database.
     * @return \PDO
     */
    public static function connect()
    {
        if (!self::$db) {
            new Database();
        }

        return self::$db;
    }
}
