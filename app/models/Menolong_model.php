<?php

class Menolong_model
{
    private $table = 'menolong';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahData($id_mintatolong, $id_penolong)
    {
        $query = "INSERT INTO $this->table VALUES ('', :id_masyarakat, :id_mintatolong)";
        $this->db->query($query);
        $this->db->bind('id_masyarakat', $id_penolong);
        $this->db->bind('id_mintatolong', $id_mintatolong);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPenolong($id_mintatolong)
    {
        $query = "SELECT nama AS penolong FROM " . $this->table . " mn JOIN masyarakat ms ON mn.id_masyarakat = ms.id_masyarakat
                    WHERE id_mintatolong=:id_mintatolong";
        $this->db->query($query);
        $this->db->bind('id_mintatolong', $id_mintatolong);
        return $this->db->single();
    }

    public function getRiwayat($id)
    {
        $query = "SELECT mt.id_mintatolong, judul, status 
                    FROM " . $this->table . " mn JOIN mintatolong mt ON mt.id_mintatolong = mn.id_mintatolong
                    WHERE mn.id_masyarakat=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
}
