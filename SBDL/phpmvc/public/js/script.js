$(function () {
    //tabel barang
    $('.tambahDataBarang').on('click', function () {
        $('#judulModal').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#kategori').val("");
        $('#nama').val("");
        $('#merk').val("");
        $('#gambar').val("");
        $('#hrg_beli').val("");
        $('#hrg_jual').val("");
        $('#stok').val("");
        $('#spek').val("");
        $('#ket').val("");
        $('#tgl_masuk').val("");
        $('#kd_brg').val("");
    });

    $('.editDataBarang').on('click', function () {
        $('#judulModal').html('Edit Data Barang');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/barang/edit');

        const kd_brg = $(this).data('kd_brg');

        $.ajax({
            url: 'http://localhost/phpmvc/public/barang/getedit',
            data: {
                kd_brg: kd_brg
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kategori').val(data.kd_kat);
                $('#nama').val(data.nm_brg);
                $('#merk').val(data.kd_merk);
                $('#gambar').val(data.gambar);
                $('#hrg_beli').val(data.hrg_beli);
                $('#hrg_jual').val(data.hrg_jual);
                $('#stok').val(data.stok);
                $('#spek').val(data.spesifikasi);
                $('#ket').val(data.ket);
                $('#tgl_masuk').val(data.tgl_masuk);
                $('#kd_brg').val(data.kd_brg);
            }
        });

    });


    //tabel kota
    $('.tambahDataKota').on('click', function () {
        $('#judulModal').html('Tambah Data Kota');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#prov').val("");
        $('#nama').val("");
        $('#biaya').val("");
    });

    $('.editDataKota').on('click', function () {
        $('#judulModal').html('Edit Data Kota');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/kota/edit');

        const id_kota = $(this).data('id_kota');

        $.ajax({
            url: 'http://localhost/phpmvc/public/kota/getedit',
            data: {
                id_kota: id_kota
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#prov').val(data.id_prov);
                $('#nama').val(data.nama_kota);
                $('#biaya').val(data.biaya);
                $('#id_kota').val(data.id_kota);
            }
        });

    });

    //tabel konsumen
    $('.tambahDataKons').on('click', function () {
        $('#judulModal').html('Tambah Data Konsumen');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#konsumen').val("");
        $('#kota').val("");
        $('#nama_kons').val("");
        $('#alamat').val("");
        $('#kode_pos').val("");
        $('#phone').val("");
        $('#email').val("");
        $('#nama_bank').val("");
        $('#cabang').val("");
        $('#atas_nama').val("");
        $('#rek').val("");
    });

    $('.editDataKons').on('click', function () {
        $('#judulModal').html('Edit Data Konsumen');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/konsumen/edit');

        const id_konsumen = $(this).data('id_konsumen');

        $.ajax({
            url: 'http://localhost/phpmvc/public/konsumen/getedit',
            data: {
                id_konsumen: id_konsumen
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#konsumen').val(data.id_konsumen);
                $('#kota').val(data.id_kota);
                $('#nama_kons').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#kode_pos').val(data.kode_pos);
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#nama_bank').val(data.nama_bank);
                $('#cabang').val(data.cabang);
                $('#atas_nama').val(data.atas_nama);
                $('#rek').val(data.rek);
            }
        });

    });

    //tabel provinsi
    $('.tambahDataProv').on('click', function () {
        $('#judulModal').html('Tambah Data Provinsi');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_prov').val("");
    });

    $('.editDataProv').on('click', function () {
        $('#judulModal').html('Edit Data Provinsi');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/provinsi/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/provinsi/getedit',
            data: {
                id_prov: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_prov').val(data.nama_prov);
                $('#id_prov').val(data.id_prov);
            }
        });

    });

    //tabel merk
    $('.tambahDataMerk').on('click', function () {
        $('#judulModal').html('Tambah Data Merk');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_merk').val("");
        $('#gambar').val("");
    });

    $('.editDataMerk').on('click', function () {
        $('#judulModal').html('Edit Data Merk');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/merk/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/merk/getedit',
            data: {
                kd_merk: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_merk').val(data.nama_merk);
                $('#gambar').val(data.mgambar);
                $('#kd_mrk').val(data.kd_merk);
            }
        });

    });

    //tabel kategori
    $('.tambahDataKategori').on('click', function () {
        $('#judulModal').html('Tambah Data Kategori');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#kd_kategori').val("");
        $('#nama_kat').val("");
    });

    $('.editDataKategori').on('click', function () {
        $('#judulModal').html('Edit Data Kategori');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/kategori/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/kategori/getedit',
            data: {
                kd_ktgr: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#kd_kategori').val(data.kd_kat);
                $('#nama_kat').val(data.nama_kat);
                $('#kd_kat').val(data.kd_kat);
            }
        });

    });
});