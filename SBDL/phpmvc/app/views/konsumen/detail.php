<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-primary" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title ">Nama : <?= $data['konsumen']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Nama kota : <?= $data['konsumen']['nama_kota']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Kode Pos: <?= $data['konsumen']['kode_pos']; ?></h6>
                    <p class="card-text">Alamat : <br><?= $data['konsumen']['alamat']; ?></p>
                    <p class="card-text">Telephone : <br><?= $data['konsumen']['phone']; ?></p>
                    <p class="card-text text-primary">E-mail : <br><?= $data['konsumen']['email']; ?></p>
                    <p class="card-text">Nama Bank : <br><?= $data['konsumen']['nama_bank']; ?>, cabang <?= $data['konsumen']['cabang']; ?></p>
                    <p class="card-text">Atas Nama : <br><?= $data['konsumen']['atas_nama']; ?></p>
                    <h6 class="card-subtitle mb-2 text-bold text-warning">NO Rekening : <?= $data['konsumen']['rek']; ?></h6>
                    <a href="<?= BASEURL; ?>/konsumen " class="btn btn-outline-success btn-sm ">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>