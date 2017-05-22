<?php

namespace App;

class Conn
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn  = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getDB()
    {
        $dsn  = "mysql:host=localhost;dbname=test_oo";
        $user = "root";
        $pass = "root";

        return new \PDO($dsn, $user, $pass);
    }
}