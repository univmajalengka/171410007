<?php
class Kategori extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kategori';
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Kategori_model')->tambahDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit;
            // } else if ($this->model('Barang_model')->tambahDataBarang(empty($_POST))) {
            //     echo "<script>
            //             alert('Form harus diisi!');
            //     </script>";
            //     header('Location:' . BASEURL . '/barang');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kategori_model')->hapusDataKategori($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Kategori_model')->getKategoriById($_POST['kd_ktgr']));
    }

    public function edit()
    {
        if ($this->model('Kategori_model')->editDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diedit', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit;
        }
    }
}
