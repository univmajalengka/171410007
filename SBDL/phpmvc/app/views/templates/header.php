<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/dien.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container pt-2 pb-2">
            <a class="navbar-brand" href="<?= BASEURL; ?>">WEBSITEDIEN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Home') echo 'active'; ?>" href="<?= BASEURL; ?>">HOME <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Barang' || $data['judul'] == 'Detail Barang') echo 'active'; ?>" href="<?= BASEURL ?>/barang">BARANG</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Merk') echo 'active'; ?>" href="<?= BASEURL ?>/merk">MERK</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Kategori') echo 'active'; ?>" href="<?= BASEURL ?>/kategori">KATEGORI</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Konsumen' || $data['judul'] == 'Detail Konsumen') echo 'active'; ?>" href="<?= BASEURL ?>/konsumen">KONSUMEN</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Kota') echo 'active'; ?>" href="<?= BASEURL ?>/kota">KOTA</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'Provinsi') echo 'active'; ?>" href="<?= BASEURL ?>/provinsi">PROVINSI</a>
                    <a class="nav-item nav-link <?php if ($data['judul'] == 'About') echo 'active'; ?>" href="<?= BASEURL ?>/about">ABOUT</a>
                </div>
            </div>
        </div>
    </nav>