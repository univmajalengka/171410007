<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-primary" style="width: 50rem;">
                <div class="card-body">
                    <h4 class="card-title "><?= $data['brg']['nm_brg']; ?></h4>
                    <a href="#" class="btn btn-primary btn-sm"><?= $data['brg']['nama_kat']; ?></a>
                    <a href="#" class="btn btn-danger btn-sm"><?= $data['brg']['nama_merk']; ?></a>
                    <br><br>
                    <?php
                    function tgl_indo($tanggal)
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

                    $tanggal = $data['brg']['tgl_masuk'];
                    ?>
                    <h6 class=" card-subtitle mb-2 text-muted">Tgl Masuk : <?= tgl_indo($tanggal); ?></h6>
                    <p class="card-text">Spesifikasi : <br><?= $data['brg']['spesifikasi']; ?></p>
                    <p class="card-text">Keterangan : <br><?= $data['brg']['ket']; ?></p>
                    <h6 class="card-subtitle mb-2 text-bold text-warning">Harga Jual : Rp.<?= $data['brg']['hrg_jual']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-bold text-warning">Harga Beli : Rp.<?= $data['brg']['hrg_beli']; ?></h6>
                    <a href="<?= BASEURL; ?>/barang " class="btn btn-outline-success btn-sm ">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>