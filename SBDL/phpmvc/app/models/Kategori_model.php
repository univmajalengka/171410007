<?php

class Kategori_model
{
    private $table = 'kategori';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKategoriById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_kat=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKategori($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    (:kd_kat,:nama_kat)";

        $this->db->query($query);
        $this->db->bind('kd_kat', $data['kd_kategori']);
        $this->db->bind('nama_kat', $data['nama_kat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKategori($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE kd_kat=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataKategori($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    kd_kat = :kd_kategori, nama_kat = :nama_kat
                    WHERE kd_kat = :kd_kat";

        $this->db->query($query);
        $this->db->bind('kd_kategori', $data['kd_kategori']);
        $this->db->bind('nama_kat', $data['nama_kat']);
        $this->db->bind('kd_kat', $data['kd_kat']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
