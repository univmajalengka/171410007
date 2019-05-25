<?php
class Provinsi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Provinsi';
        $data['provinsi'] = $this->model('Provinsi_model')->getAllProvinsi();
        $this->view('templates/header', $data);
        $this->view('provinsi/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Provinsi_model')->tambahDataProvinsi($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/provinsi');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/provinsi');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Provinsi_model')->hapusDataProvinsi($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/provinsi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/provinsi');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Provinsi_model')->getProvinsiById($_POST['id_prov']));
    }

    public function edit()
    {
        if ($this->model('Provinsi_model')->editDataProvinsi($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/provinsi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/provinsi');
            exit;
        }
    }
}
