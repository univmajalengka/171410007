<?php
class Barang extends Controller
{
    public function index()
    {
        $data['judul'] = 'Barang';
        $data['brg'] = $this->model('Barang_model')->getAllBarang();
        $data['kat'] = $this->model('Barang_model')->getAllKategori();
        $data['merk'] = $this->model('Barang_model')->getAllMerk();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['brg'] = $this->model('Barang_model')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Barang_model')->tambahDataBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Barang_model')->hapusDataBarang($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Barang_model')->getBarangById($_POST['kd_brg']));
    }

    public function edit()
    {
        if ($this->model('Barang_model')->editDataBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit;
        }
    }
}
