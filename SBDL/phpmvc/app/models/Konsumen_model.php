<?php

class Konsumen_model
{
    private $table = 'konsumen';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKonsumen()
    {
        $this->db->query('SELECT * FROM view_konsumen');
        return $this->db->resultSet();
    }

    public function getKonsumenById($id)
    {
        $this->db->query('SELECT * FROM view_konsumen WHERE id_konsumen=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllKota()
    {
        $this->db->query('SELECT * FROM kota');
        return $this->db->resultSet();
    }

    public function tambahDataKonsumen($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    (:id_kons,:kota,:nama,:alamat,:kode_pos,:phone,:email,:nama_bank,:cabang,:atas_nama,:rek)";

        $this->db->query($query);
        $this->db->bind('id_kons', $data['konsumen']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('nama', $data['nama_kons']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kode_pos', $data['kode_pos']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nama_bank', $data['nama_bank']);
        $this->db->bind('cabang', $data['cabang']);
        $this->db->bind('atas_nama', $data['atas_nama']);
        $this->db->bind('rek', $data['rek']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKonsumen($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE id_konsumen=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataKonsumen($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    id_konsumen = :id_kons,
                    id_kota = :kota,
                    nama = :nama,
                    alamat = :alamat,
                    kode_pos = :kode_pos,
                    phone = :phone,
                    email = :email,
                    nama_bank = :nama_bank,
                    cabang = :cabang,
                    atas_nama = :atas_nama,
                    rek = :rek
                    WHERE id_konsumen = :id_kons";

        $this->db->query($query);
        $this->db->bind('id_kons', $data['konsumen']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('nama', $data['nama_kons']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kode_pos', $data['kode_pos']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nama_bank', $data['nama_bank']);
        $this->db->bind('cabang', $data['cabang']);
        $this->db->bind('atas_nama', $data['atas_nama']);
        $this->db->bind('rek', $data['rek']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
