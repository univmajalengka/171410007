<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataProv" data-toggle="modal" data-target="#formModal">
                Tambah data provinsi
            </button>
            <h3>Daftar Provinsi</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Provinsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($data['provinsi'] as $prov) :
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $prov['nama_prov']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/provinsi/edit/<?= $prov['id_prov']; ?>" class="btn btn-outline-success btn-sm editDataProv" data-toggle="modal" data-target="#formModal" data-id="<?= $prov['id_prov'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/provinsi/hapus/<?= $prov['id_prov']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data Provinsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/provinsi/tambah" method="post">

                    <input type="hidden" name="id_prov" id="id_prov">

                    <div class="form-group">
                        <label for="nama_prov">Nama Provinsi</label>
                        <input type="text" class="form-control form-control-sm" id="nama_prov" name="nama_prov">
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