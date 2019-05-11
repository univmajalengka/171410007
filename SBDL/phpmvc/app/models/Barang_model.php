<?php

class Barang_model
{
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_brg=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM kategori');
        return $this->db->resultSet();
    }

    public function getAllMerk()
    {
        $this->db->query('SELECT * FROM merk');
        return $this->db->resultSet();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                    ('',:kat,:nama,:merk,:gambar,:hrg_beli,:hrg_jual,:stok,:spek,:ket,:tgl_masuk)";

        $this->db->query($query);
        $this->db->bind('kat', $data['kategori']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('hrg_beli', $data['hrg_beli']);
        $this->db->bind('hrg_jual', $data['hrg_jual']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('spek', $data['spek']);
        $this->db->bind('ket', $data['ket']);
        $this->db->bind('tgl_masuk', $data['tgl_masuk']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = "DELETE  FROM " . $this->table . " WHERE kd_brg=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataBarang($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    kd_kat = :kat,
                    nm_brg = :nama,
                    kd_merk = :merk,
                    gambar = :gambar,
                    hrg_beli = :hrg_beli,
                    hrg_jual = :hrg_jual,
                    stok = :stok,
                    spesifikasi = :spek,
                    ket = :ket,
                    tgl_masuk = :tgl_masuk
                    WHERE kd_brg = :kd_brg";

        $this->db->query($query);
        $this->db->bind('kat', $data['kategori']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('hrg_beli', $data['hrg_beli']);
        $this->db->bind('hrg_jual', $data['hrg_jual']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('spek', $data['spek']);
        $this->db->bind('ket', $data['ket']);
        $this->db->bind('tgl_masuk', $data['tgl_masuk']);
        $this->db->bind('kd_brg', $data['kd_brg']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
