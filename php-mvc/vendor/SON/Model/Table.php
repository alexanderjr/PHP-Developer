<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 22/05/17
 * Time: 22:45
 */

namespace SON\Model;


class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "SELECT * FROM {$this->table}";
        return $this->db->query($query);
    }

    public function find($id)
    {
        $query = "SELECT * FROM {$this->table} where id=:id";
        $res = $this->db->prepare($query);
        $res->bindParam(":id", $id);
        $res->execute();
        return $res->fetch(\PDO::FETCH_ASSOC);
    }
}