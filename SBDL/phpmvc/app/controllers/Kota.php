<?php
class Kota extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kota';
        $data['kota'] = $this->model('Kota_model')->getAllKota();
        $data['provinsi'] = $this->model('Kota_model')->getAllProvinsi();
        $this->view('templates/header', $data);
        $this->view('kota/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Kota_model')->tambahDataKota($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/kota');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/kota');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kota_model')->hapusDataKota($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/kota');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/kota');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Kota_model')->getKotaById($_POST['id_kota']));
    }

    public function edit()
    {
        if ($this->model('Kota_model')->editDataKota($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/kota');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/kota');
            exit;
        }
    }
}
