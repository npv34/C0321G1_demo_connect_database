<?php

namespace App\Database;

class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=classicmodels';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }
    }

}