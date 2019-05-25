<?php

class Kota_model
{
    private $table = 'kota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKota()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKotaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kota=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllProvinsi()
    {
        $this->db->query('SELECT * FROM provinsi');
        return $this->db->resultSet();
    }

    public function tambahDataKota($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    ('',:prov,:nama,:biaya)";

        $this->db->query($query);
        $this->db->bind('prov', $data['prov']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('biaya', $data['biaya']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKota($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE id_kota=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataKota($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    id_prov = :prov,
                    nama_kota = :nama,
                    biaya = :biaya
                    WHERE id_kota = :id_kota";

        $this->db->query($query);
        $this->db->bind('prov', $data['prov']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('biaya', $data['biaya']);
        $this->db->bind('id_kota', $data['id_kota']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
