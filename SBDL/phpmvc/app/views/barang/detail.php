<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-primary" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title "><?= $data['brg']['nm_brg']; ?></h5>
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
                    <h6 class="card-subtitle mb-2 text-muted">Tgl Masuk : <?= tgl_indo($tanggal); ?></h6>
                    <p class="card-text">Spesifikasi : <br><?= $data['brg']['spesifikasi']; ?></p>
                    <h6 class="card-subtitle mb-2 text-bold text-warning">Harga : Rp.<?= $data['brg']['hrg_jual']; ?></h6>
                    <a href="<?= BASEURL; ?>/barang " class="btn btn-outline-success btn-sm " id="dien">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>