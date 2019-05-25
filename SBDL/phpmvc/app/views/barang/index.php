<div class="container mt-3">

    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary mb-4 tambahDataBarang" data-toggle="modal" data-target="#formModal">
                Tambah data barang
            </button>
            <h3>Daftar Barang</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    function tanggal_indo($tanggal)
                    {
                        $bulan = array(
                            1 => 'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );

                        $split = explode('-', $tanggal);
                        return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
                    }
                    $i = 0;
                    foreach ($data['brg'] as $brg) :
                        $tanggal = $brg['tgl_masuk'];
                        ?>
                        <tr>
                            <th scope="row"><?= $i + 1 ?>.</th>
                            <td><?= $brg['nm_brg']; ?></td>
                            <td><?= $brg['stok']; ?> Items</td>
                            <td><?= tanggal_indo($tanggal); ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/barang/detail/<?= $brg['kd_brg'] ?>" class="btn btn-outline-primary btn-sm">Detail</a>
                                <a href="<?= BASEURL; ?>/barang/edit/<?= $brg['kd_brg'] ?>" class="btn btn-outline-success btn-sm editDataBarang" data-toggle="modal" data-target="#formModal" data-kd_brg="<?= $brg['kd_brg'] ?>">Edit</a>
                                <a href="<?= BASEURL; ?>/barang/hapus/<?= $brg['kd_brg'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/barang/tambah" method="post">

                    <input type="hidden" name="kd_brg" id="kd_brg">

                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="" disable selected>-</option>
                            <?php foreach ($data['kat'] as $kat) : ?>
                                <option value="<?= $kat['kd_kat']; ?>"><?= $kat['nama_kat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="merk">Nama Merk</label>
                        <select class="form-control form-control-sm" id="merk" name="merk">
                            <option value="" disable selected>-</option>
                            <?php foreach ($data['merk'] as $mrk) : ?>
                                <option value="<?= $mrk['kd_merk']; ?>"><?= $mrk['nama_merk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file form-control-sm" id="gambar" name="gambar">
                    </div> -->

                    <div class="form-group">
                        <label for="gambar"></label>
                        <input type="text" class="form-control-file" id="gambar" name="gambar">
                    </div>

                    <div class="form-group">
                        <label for="hrg_beli">Harga Beli</label>
                        <input type="number" class="form-control form-control-sm" id="hrg_beli" name="hrg_beli">
                    </div>

                    <div class="form-group">
                        <label for="hrg_jual">Harga Jual</label>
                        <input type="number" class="form-control form-control-sm" id="hrg_jual" name="hrg_jual">
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control form-control-sm" id="stok" name="stok">
                    </div>

                    <div class="form-group">
                        <label for="spek">Spesifikasi</label>
                        <input type="text" class="form-control form-control-sm" id="spek" name="spek">
                    </div>

                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control form-control-sm" id="ket" name="ket">
                    </div>

                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control form-control-sm" id="tgl_masuk" name="tgl_masuk">
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