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

    public function addDataSeiyuu($data)
    {
        // Changing date format
        $birth = $data['birth'];
        $birth = date("Y-m-d", strtotime($birth));

        $query = "INSERT INTO seiyuu
                    VALUES
                    (null, :name, :gender, :birth,  :about)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('birth', $birth);
        $this->db->bind('about', $data['about']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
