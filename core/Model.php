<?php

namespace Core;

use Core\Connection;

class Model
{
    protected \PDO $db;

    public function __construct()
    {
        $this->db = Connection::getDb();
    }

    public function prepare(string $query)
    {
        return $this->db->prepare($query);
    }

}
