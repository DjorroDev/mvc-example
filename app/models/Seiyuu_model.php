<?php

class Seiyuu_model
{
    private $table = 'seiyuu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSeiyuu()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSeiyuuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
