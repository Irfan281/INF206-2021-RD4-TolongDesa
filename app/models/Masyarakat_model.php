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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_masyarakat=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMasyarakat($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

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

    public function cekEmail($data)
    {
        $this->db->query('SELECT email FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekPassword($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email', $data['email']);
        $row = $this->db->single();
        if (password_verify($data['password'], $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id_masyarakat'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['peran'] = $row['peran'];
            return true;
        } else {
            return false;
        }
    }
}
