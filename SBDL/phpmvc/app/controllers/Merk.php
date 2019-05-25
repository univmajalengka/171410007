<?php
class Merk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Merk';
        $data['merk'] = $this->model('Merk_model')->getAllMerk();
        $this->view('templates/header', $data);
        $this->view('merk/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Merk_model')->tambahDataMerk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/merk');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/merk');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Merk_model')->hapusDataMerk($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/merk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/merk');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Merk_model')->getMerkById($_POST['kd_merk']));
    }

    public function edit()
    {
        if ($this->model('Merk_model')->editDataMerk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/merk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/merk');
            exit;
        }
    }
}
