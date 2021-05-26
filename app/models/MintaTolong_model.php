<?php

class MintaTolong_model
{
    private $table = 'mintatolong';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
    {
        $query = "SELECT id_mintatolong, mt.id_masyarakat, nama, peran, judul, deskripsi, mt.alamat, tags, status 
                    FROM " . $this->table . " mt JOIN masyarakat ms ON mt.id_masyarakat = ms.id_masyarakat
                    ORDER BY id_mintatolong";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mintatolong=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $tags = $data['tag1'] . ', ' . $data['tag2'] . ', ' . $data['tag3'];
        $query = "INSERT INTO $this->table VALUES ('', :id_masyarakat, :judul, :deskripsi, :alamat, :tags, :status)";
        $this->db->query($query);
        $this->db->bind('id_masyarakat', $_SESSION['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('tags', $tags);
        $this->db->bind('status', true);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
