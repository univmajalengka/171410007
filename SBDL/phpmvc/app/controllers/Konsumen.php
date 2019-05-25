<?php
class Konsumen extends Controller
{
    public function index()
    {
        $data['judul'] = 'Konsumen';
        $data['konsumen'] = $this->model('Konsumen_model')->getAllKonsumen();
        $data['kota'] = $this->model('Konsumen_model')->getAllKota();
        $this->view('templates/header', $data);
        $this->view('konsumen/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Konsumen';
        $data['konsumen'] = $this->model('Konsumen_model')->getKonsumenById($id);
        $this->view('templates/header', $data);
        $this->view('konsumen/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Konsumen_model')->tambahDataKonsumen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/konsumen');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/konsumen');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Konsumen_model')->hapusDataKonsumen($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/konsumen');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/konsumen');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Konsumen_model')->getKonsumenById($_POST['id_konsumen']));
    }

    public function edit()
    {
        if ($this->model('Konsumen_model')->editDataKonsumen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/konsumen');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/konsumen');
            exit;
        }
    }
}
