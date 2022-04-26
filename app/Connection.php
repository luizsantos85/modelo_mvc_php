<?php

namespace App;

use App\Config;
use PDOException;

class Connection
{
    public static function getDb()
    {
        try {
            $conn = new \PDO(Config::DB_DRIVER . ":host=" . Config::DB_HOST . ";dbname=" . Config::DB_DATABASE, Config::DB_USER, Config::DB_PASS);

            return $conn;
        } catch (PDOException $err) {
            //throw $err;
        }
    }
}
