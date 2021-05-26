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
}
