$(function () {
    $('.tambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.editData').on('click', function () {
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
});