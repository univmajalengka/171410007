<?php

class Provinsi_model
{
    private $table = 'provinsi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProvinsi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProvinsiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_prov=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProvinsi($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    ('',:nama_prov)";

        $this->db->query($query);
        $this->db->bind('nama_prov', $data['nama_prov']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProvinsi($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE id_prov=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataProvinsi($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nama_prov = :nama_prov
                    WHERE id_prov = :id_prov";

        $this->db->query($query);
        $this->db->bind('nama_prov', $data['nama_prov']);
        $this->db->bind('id_prov', $data['id_prov']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
