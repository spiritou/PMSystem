<?php

namespace app\Core;

class Database
{
    private $conn;

    public function __construct()
    {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';charset=utf8mb4';

        try {
            $this->conn = new \PDO($dsn, DB_USERNAME, DB_PASSWORD);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
    public function getConnection()
    {
        return $this->conn;
    }
}

