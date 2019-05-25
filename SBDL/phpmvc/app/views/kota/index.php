<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataKota" data-toggle="modal" data-target="#formModal">
                Tambah data kota
            </button>
            <h3>Daftar Kota</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Provinsi</th>
                        <th scope="col">Nama Kota</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($data['kota'] as $kt) :
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $kt['id_prov']; ?></td>
                            <td><?= $kt['nama_kota']; ?></td>
                            <td><?= $kt['biaya']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/kota/edit/<?= $kt['id_kota']; ?>" class="btn btn-outline-success btn-sm editDataKota" data-toggle="modal" data-target="#formModal" data-id_kota="<?= $kt['id_kota'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/kota/hapus/<?= $kt['id_kota']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data Kota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/kota/tambah" method="post">

                    <input type="hidden" name="id_kota" id="id_kota">

                    <div class="form-group">
                        <label for="prov">Provinsi</label>
                        <select class="form-control form-control-sm" id="prov" name="prov">
                            <option value="" disable selected>-</option>
                            <?php foreach ($data['provinsi'] as $prov) : ?>
                                <option value="<?= $prov['id_prov']; ?>"><?= $prov['nama_prov']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Kota</label>
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <input type="number" class="form-control-file" id="biaya" name="biaya">
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