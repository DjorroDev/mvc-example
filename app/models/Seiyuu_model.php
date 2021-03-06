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

    // Since uploaded image not from POST need to added new data
    public function addDataSeiyuu($data, $img)
    {
        // Changing date format
        $birth = $data['birth'];
        $birth = date("Y-m-d", strtotime($birth));

        $query = "INSERT INTO seiyuu
                    VALUES
                    (null, :name, :gender, :birth,  :about, :image)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('birth', $birth);
        $this->db->bind('about', $data['about']);
        $this->db->bind('image', $img);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataSeiyuu($id)
    {
        $query = "DELETE FROM seiyuu WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function changeDataSeiyuu($data, $img)
    {
        // Changing date format
        $birth = $data['birth'];
        $birth = date("Y-m-d", strtotime($birth));

        $query = "UPDATE seiyuu SET
                    name = :name,
                    gender = :gender,
                    birth = :birth,
                    about = :about,
                    image = :image
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('birth', $birth);
        $this->db->bind('about', $data['about']);
        $this->db->bind('image', $img);
        $this->db->bind('id', $data['id']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchSeiyuu()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM seiyuu where name LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%" . $keyword . "%");

        return $this->db->resultSet();
    }
}
