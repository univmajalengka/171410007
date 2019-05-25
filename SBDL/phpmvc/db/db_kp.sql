-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2019 pada 04.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `id_konsumen` varchar(13) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`, `id_konsumen`, `level`) VALUES
('aulia', '12345', '', 'admin'),
('ayu', '12345', '', 'admin'),
('dien', '12345', '', 'admin'),
('diki', '12345', '', 'admin'),
('encep', '12345', '', 'admin'),
('iqbal', '12345', '', 'admin'),
('raka', '12345', '', 'admin'),
('rifki', '12345', '', 'admin'),
('usep', '12345', '', 'admin'),
('yudi', '12345', '', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_brg` int(11) NOT NULL,
  `kd_kat` varchar(5) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `kd_merk` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `hrg_beli` double NOT NULL,
  `hrg_jual` double NOT NULL,
  `stok` int(5) NOT NULL,
  `spesifikasi` text NOT NULL,
  `ket` text NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_brg`, `kd_kat`, `nm_brg`, `kd_merk`, `gambar`, `hrg_beli`, `hrg_jual`, `stok`, `spesifikasi`, `ket`, `tgl_masuk`) VALUES
(2, 'KT002', 'SUPREME MARVIN GAYE TEE- BLACK dn', 4, 'kemasan - mie.png', 3200000, 4500000, 5, 'gdfgdf', 'hfhgfhfghfghg', '2019-03-03'),
(3, 'KT003', 'Casual Kemeja Cotton', 10, 'kemasan - mie.png', 272000, 320000, 15, '- Kemeja warna solid dengan warna solid - Warna abu-abu - Detail kerah - Unlined - Regular fit - Kancing depan ', 'jkskjfsjdkjfsjdfsfds', '2019-03-05'),
(4, 'KT004', 'Adidas Originals Sst Tracktop', 7, 'kemasan - mie.png', 1100000, 1200000, 10, '- adidas originals - Track jacket bernuansa monokrom dengan desain klasik - Warna hitam - Material katun kombinasi tidak transparan, tebal, dan tidak stretch - Kerah tinggi - Regular fit - Resleting depan - 2 kantong depan - Tinggi model 186cm, mengenakan ukuran M ', 'hfhgfhfghfghg', '2019-03-08'),
(5, 'KT005', 'Sweatshirt with Interlocking G print', 9, 'kemasan - mie.png', 20034057, 24000000, 3, 'Blue washed heavy felted cotton jersey treated for a vintage effect\r\nGreen and red Gucci and Interlocking G print\r\nTwill lining\r\nFixed hood\r\nOversize fit\r\n100% cotton\r\nMade in Italy\r\nThe model is 6\'1\" and is wearing size medium', '', '2019-03-10'),
(6, 'KT006', 'Nike Air Max 270 Futura Shoes', 2, 'kemasan - mie.png', 2099000, 2300000, 10, '- Sneakers warna solid dengan nuansa monokrom - Warna hitam- Upper kulit sintetis, mesh dan tekstil- Insole sintetis dengan visible Max Air untuk bantalan yang responsif- Rubber outsole- Tali depan- Round toe', 'dfdgdfgdfg', '2019-03-07'),
(7, 'KT007', 'Chuck Taylor All Star Waterproof Leather High Top', 5, '', 1200000, 1500000, 5, 'Nubuck leather upper is tough, but smooth.\r\nReflective elements add safety and style.\r\nMesh inner sleeve is light and breathable.\r\nNike Lunarlon insole for cushioned comfort.\r\nDebossed All Star ankle patch', 'gdgdgdgdgdf', '2019-03-05'),
(8, 'KT008', 'Wakai Core Stamp', 3, '', 490000, 520000, 20, '- Slip on warna solid dengan desain minimalis\r\n- Warna hitam\r\n- Upper kanvas\r\n- Insole tekstil\r\n- Rubber outsole\r\n- Detail gusset elastis\r\n- Round toe', '', '2019-03-03'),
(9, 'KT009', 'Aru Vintage Black', 11, 'adad', 350000, 380000, 15, '- CH Leather Upper- Faux Leather Insole- TPR Outsole', 'sfsfsfsdfs', '2019-03-07'),
(37, 'KT004', 'klaksdkadkls nd', 4, 'kemasan - mie.png', 876867, 68686, 43, 'klakldkaldklkada', 'dadksdlkaldklkada', '2019-05-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jual`
--

CREATE TABLE `detail_jual` (
  `id_detail` int(5) NOT NULL,
  `no_faktur` varchar(13) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `kd_brg` int(11) NOT NULL,
  `sub_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jual`
--

INSERT INTO `detail_jual` (`id_detail`, `no_faktur`, `jumlah`, `kd_brg`, `sub_total`) VALUES
(2, 'NF0002', 2, 2, 0),
(3, 'NF0003', 1, 3, 320000),
(4, 'NF0004', 2, 4, 0),
(5, 'NF0005', 3, 5, 0),
(6, 'NF0006', 1, 6, 2300000),
(7, 'NF0007', 3, 7, 0),
(8, 'NF0008', 2, 8, 0),
(9, 'NF0009', 5, 9, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kd_kat` varchar(5) NOT NULL,
  `nama_kat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kd_kat`, `nama_kat`) VALUES
('KT001', 'Jeans'),
('KT002', 'Kaos'),
('KT003', 'Kemeja'),
('KT004', 'Jaket'),
('KT005', 'Hoodie'),
('KT006', 'Sneakers'),
('KT007', 'Boots'),
('KT008', 'Slip On'),
('KT009', 'Sandal'),
('KT010', 'Tas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` varchar(13) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `nama_bank` varchar(40) NOT NULL,
  `cabang` varchar(40) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `id_kota`, `nama`, `alamat`, `kode_pos`, `phone`, `email`, `nama_bank`, `cabang`, `atas_nama`, `rek`) VALUES
('idaijds', 10, 'kajdajskd', 'ajckjcaod', '49023', '902482934', 'didinrudini12rplb@gmail.com', 'sofosdkfd', 'ajkjkf', 'jfkjsjdf', '93023'),
('KD829483', 5, 'jdksjkd', 'kdjkdjaj', '24903', '950453049503', 'didinrudini12rplb@gmail.com', 'djkajdkas', 'jdkajdksakdja', 'alkldkalksdka', '920493'),
('KN0001', 1, 'didin', 'desa ranjikulon', '45453', '082117826547', 'didinrudini12rplb@gmail.com', 'BJB', 'majalengka', 'didin rudini', '3142412312'),
('KN0002', 1, 'roni', 'desa karang asem', '45473', '0831983723871', '', 'BJB', 'majalangka', 'roni', '83918329'),
('KN0003', 1, 'dadan', 'desa bongas', '45455', '28493472874', '', 'BJB', 'majalengka', 'dadan', '9349184922'),
('KN0004', 1, 'nana', 'desa beusi', '45456', '849824983942', '', 'BJB', 'majalengka', 'nana', '484928349'),
('KN0005', 1, 'sigit', 'desa kasokandel', '45453', '9390293829', '', 'BJB', 'majalengka', 'sigit', '398293283'),
('KN0006', 1, 'iqbal', 'desa sindang haji', '45475', '84928493234', '', 'BJB', 'Majalengka', 'iqbal', '427487382'),
('KN0007', 1, 'crisda', 'ligung', '45456', '978878', '', 'BJB', 'Majalengka', 'crisda', '9492349432'),
('KN0008', 1, 'deden', 'pangkalanpari', '45458', '8942893482934', '', 'BJB', 'Majalengka', 'deden', '493894394'),
('KN0009', 1, 'harist', 'kertajati', '45457', '839849823', '', 'BJB', 'Majalengka', 'haris', '84982493'),
('KN0010', 1, 'dinda', 'kareo', '45468', '898325984', '', 'BJB', 'Majalengka', 'dinda', '48928493');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `biaya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `id_prov`, `nama_kota`, `biaya`) VALUES
(1, 8, 'Majalengka', 8000),
(2, 8, 'Cirebon', 8500),
(3, 8, 'Indramayu', 8000),
(4, 8, 'Kuningan', 8000),
(5, 9, 'Jakarta Selatan', 12000),
(6, 3, 'Denpasar', 18000),
(7, 10, 'Pekalongan', 18000),
(8, 4, 'Pekanbaru', 30000),
(9, 7, 'Tangerang', 12000),
(10, 6, 'Bengkulu', 30000),
(16, 6, 'jdkajds', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `kd_merk` int(11) NOT NULL,
  `nama_merk` varchar(20) NOT NULL,
  `mgambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`kd_merk`, `nama_merk`, `mgambar`) VALUES
(1, ' Levi\'s', ''),
(2, 'Nike', ''),
(3, 'Wakai', ''),
(4, 'Supreme', ''),
(5, 'Converse', ''),
(6, 'Under Armour', ''),
(7, 'Adidas', ''),
(8, 'Cressida', ''),
(9, 'Gucci', ''),
(10, 'Cardinal', ''),
(11, 'Brodo', ''),
(12, 'adksdl', 'Concrete_Wall_3_by_mdpratt.jpg'),
(13, 'klakda', 'dgdgdf'),
(14, 'ljkljiji', 'kemasan - mie.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `no_faktur` varchar(13) NOT NULL,
  `id_konsumen` varchar(13) NOT NULL,
  `grand_total` double NOT NULL,
  `tgl_jual` date NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(9) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`no_faktur`, `id_konsumen`, `grand_total`, `tgl_jual`, `tanggal`, `bulan`, `tahun`, `status`) VALUES
('NF0001', 'KN0001', 0, '2019-03-18', '18', 'Maret', '2019', ''),
('NF0002', 'KN0002', 0, '2019-03-17', '17', 'Maret', '2019', ''),
('NF0003', 'KN0003', 0, '2019-03-16', '16', 'Maret', '2019', ''),
('NF0004', 'KN0004', 0, '2019-03-16', '16', 'Maret', '2019', ''),
('NF0005', 'KN0005', 0, '2019-03-15', '15', 'Maret', '2019', ''),
('NF0006', 'KN0006', 0, '2019-03-15', '15', 'Maret', '2019', ''),
('NF0007', 'KN0007', 0, '2019-03-14', '14', 'Maret', '2019', ''),
('NF0008', 'KN0008', 0, '2019-03-14', '14', 'Maret', '2019', ''),
('NF0009', 'KN0009', 0, '2019-03-16', '16', 'Maret', '2019', ''),
('NF0010', 'KN0010', 0, '2019-03-17', '17', 'Maret', '2019', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama_prov`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bali'),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Bengkulu'),
(7, 'Banten'),
(8, 'Jawa Barat'),
(9, 'DKI Jakarta'),
(10, 'Jawa Tengah'),
(11, 'papua'),
(14, 'dienprov kajdjadsj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dien96', '$2y$10$m5XwQN29YC1zu9dzoeW2VeIP1UHv8g21onLdqnjm6gAP0n0L10Bpe'),
(2, 'didin', '$2y$10$gpA8.GNMbYRSLduTY6OhduH9.Ngy5pcCMRgVzuraQhb9rykPNnPLe'),
(18, 'aulia', '$2y$10$k5k.c/m3sKxgdwVPp2R.lOQ2/SUrAyU4uU8XOWt0/v2qoXvMK7mU.'),
(19, 'ghj', '$2y$10$wsoc.Je.m2tB/vNu8KjqGu2ifm6aeriaZLHS1Z1k3NEyOUVG0ihLG'),
(20, 'qwerty', '$2y$10$Qir6KtjXp/3cKi3vOmBs/.MGZZBgieAtc9lcRbwff/DtdMoF14fxq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_konsumen` (`id_konsumen`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`),
  ADD KEY `kd_kat` (`kd_kat`,`kd_merk`),
  ADD KEY `kd_merk` (`kd_merk`);

--
-- Indeks untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `no_faktur` (`no_faktur`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kat`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kd_merk`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `id_konsumen` (`id_konsumen`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `kd_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kd_kat`) REFERENCES `kategori` (`kd_kat`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kd_merk`) REFERENCES `merk` (`kd_merk`);

--
-- Ketidakleluasaan untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD CONSTRAINT `detail_jual_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang` (`kd_brg`);

--
-- Ketidakleluasaan untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `konsumen_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `provinsi` (`id_prov`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
