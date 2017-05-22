<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 21/05/17
 * Time: 22:29
 */

namespace App\Models;


class Client
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "SELECT * FROM products";
        return $this->db->query($query);
    }
}