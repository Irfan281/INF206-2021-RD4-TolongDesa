<?php

class Masyarakat_model
{
    private $table = 'masyarakat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMasyarakat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMasyarakatById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMasyarakat($data)
    {
        $query = "INSERT INTO $this->table VALUES ('', :nama, :alamat, :no_hp, :domisili, :email, :password, :peran, :poin)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('domisili', $data['domisili']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('peran', $data['peran']);
        $this->db->bind('poin', 0);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
