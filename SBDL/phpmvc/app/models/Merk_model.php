<?php

class Merk_model
{
    private $table = 'merk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMerk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMerkById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_merk=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMerk($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    ('',:nama_merk,:gambar)";

        $this->db->query($query);
        $this->db->bind('nama_merk', $data['nama_merk']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMerk($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE kd_merk=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataMerk($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nama_merk = :nama_merk, mgambar = :gambar
                    WHERE kd_merk = :kd_merk";

        $this->db->query($query);
        $this->db->bind('nama_merk', $data['nama_merk']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('kd_merk', $data['kd_mrk']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
