<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataMerk" data-toggle="modal" data-target="#formModal">
                Tambah data merk
            </button>
            <h3>Daftar Merk</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Merk</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($data['merk'] as $mrk) :
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $mrk['nama_merk']; ?></td>
                            <td><?= $mrk['mgambar']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/merk/edit/<?= $mrk['kd_merk']; ?>" class="btn btn-outline-success btn-sm editDataMerk" data-toggle="modal" data-target="#formModal" data-id="<?= $mrk['kd_merk'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/merk/hapus/<?= $mrk['kd_merk']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data Merk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/merk/tambah" method="post">

                    <input type="hidden" name="kd_mrk" id="kd_mrk">

                    <div class="form-group">
                        <label for="nama_merk">Nama Merk</label>
                        <input type="text" class="form-control form-control-sm" id="nama_merk" name="nama_merk">
                    </div>

                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="text" class="form-control-file" id="gambar" name="gambar">
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