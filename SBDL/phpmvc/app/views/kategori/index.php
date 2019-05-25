<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataKategori" data-toggle="modal" data-target="#formModal">
                Tambah data kategori
            </button>
            <h3>Daftar Kategori</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($data['kategori'] as $kat) :
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $kat['kd_kat']; ?></td>
                            <td><?= $kat['nama_kat']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/kategori/edit/<?= $kat['kd_kat']; ?>" class="btn btn-outline-success btn-sm editDataKategori" data-toggle="modal" data-target="#formModal" data-id="<?= $kat['kd_kat'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/kategori/hapus/<?= $kat['kd_kat']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/kategori/tambah" method="post">

                    <input type="hidden" name="kd_kat" id="kd_kat">

                    <div class="form-group">
                        <label for="kd_kategori">Kode Kategori</label>
                        <input type="text" class="form-control-file" id="kd_kategori" name="kd_kategori">
                    </div>

                    <div class="form-group">
                        <label for="nama_kat">Nama Kategori</label>
                        <input type="text" class="form-control form-control-sm" id="nama_kat" name="nama_kat">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>