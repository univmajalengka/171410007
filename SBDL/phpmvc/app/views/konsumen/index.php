<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataKons" data-toggle="modal" data-target="#formModal">
                Tambah data Konsumen
            </button>
            <h3>Daftar Konsumen</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($data['konsumen'] as $ksn) :
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $ksn['nama']; ?></td>
                            <td><?= $ksn['alamat']; ?></td>
                            <td><?= $ksn['phone']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/konsumen/detail/<?= $ksn['id_konsumen'] ?>" class="btn btn-outline-primary btn-sm">Detail</a>
                                <a href="<?= BASEURL; ?>/konsumen/edit/<?= $ksn['id_konsumen'] ?>" class="btn btn-outline-success btn-sm editDataKons" data-toggle="modal" data-target="#formModal" data-id_konsumen="<?= $ksn['id_konsumen'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/konsumen/hapus/<?= $ksn['id_konsumen'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data dn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/konsumen/tambah" method="post">

                    <input type="hidden" name="id_ksn" id="id_ksn">

                    <div class="form-group">
                        <label for="konsumen">ID Konsumen</label>
                        <input type="text" class="form-control form-control-sm" id="konsumen" name="konsumen">
                    </div>

                    <div class="form-group">
                        <label for="kota">Nama Kota</label>
                        <select class="form-control" id="kota" name="kota">
                            <option value="" disable selected>-</option>
                            <?php foreach ($data['kota'] as $kot) : ?>
                                <option value="<?= $kot['id_kota']; ?>"><?= $kot['nama_kota']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_kons">Nama Konsumen</label>
                        <input type="text" class="form-control form-control-sm" id="nama_kons" name="nama_kons">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control form-control-sm" id="alamat" name="alamat">
                    </div>

                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" class="form-control-file" id="kode_pos" name="kode_pos">
                    </div>

                    <div class="form-group">
                        <label for="phone">Telephone</label>
                        <input type="number" class="form-control form-control-sm" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="nama_bank">Nama Bank</label>
                        <input type="text" class="form-control form-control-sm" id="nama_bank" name="nama_bank">
                    </div>

                    <div class="form-group">
                        <label for="cabang">Cabang</label>
                        <input type="text" class="form-control form-control-sm" id="cabang" name="cabang">
                    </div>

                    <div class="form-group">
                        <label for="atas_nama">Atas Nama</label>
                        <input type="text" class="form-control form-control-sm" id="atas_nama" name="atas_nama">
                    </div>

                    <div class="form-group">
                        <label for="rek">No. Rekenening</label>
                        <input type="number" class="form-control form-control-sm" id="rek" name="rek">
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