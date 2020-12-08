-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Nov 2020 pada 09.30
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekDesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `tipeBerita` varchar(250) NOT NULL,
  `judulBerita` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idBerita`, `tipeBerita`, `judulBerita`, `tanggal`, `isi`, `foto`) VALUES(7, '3', 'sepak bola paseseh akan masuk liga satu', '2020-11-12', 'setelah sekian menunggu akhirnya sepak desa paseseh akan masuk ke liga satu indonesia hal ini tentu  menjadi kabar mengembirakan untuk kalangan pecinta sepak bola khususnya warga paseseh.', 'sepakbola.jpg');
INSERT INTO `berita` (`idBerita`, `tipeBerita`, `judulBerita`, `tanggal`, `isi`, `foto`) VALUES(8, '3', 'sepak bola paseseh akan masuk liga satu', '2020-11-12', 'setelah sekian menunggu akhirnya sepak desa paseseh akan masuk ke liga satu indonesia hal ini tentu  menjadi kabar mengembirakan untuk kalangan pecinta sepak bola khususnya warga paseseh.', 'sepakbola.jpg');
INSERT INTO `berita` (`idBerita`, `tipeBerita`, `judulBerita`, `tanggal`, `isi`, `foto`) VALUES(9, 'Sosial', 'desa paseseh bersolawat', '2020-11-20', 'Sebagaimana icon kabupaten bangkalan yang memilki sebutan kota zikir dan sholawat maka  maka sebagian  wilayah terutama di desa paseseh juga  sduah tidak jadi hal lazim', 'bagus.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobilRakyat`
--

CREATE TABLE `mobilRakyat` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noHp` varchar(16) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tanggalPinjam` varchar(64) NOT NULL,
  `tanggalKembali` varchar(64) NOT NULL,
  `keperluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobilRakyat`
--

INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(1, 'Khabab', 'Dusun Gelagah', '087856645152', 'khabab@gmail.com', '2020/11/01', '2020/11/01', 'Untuk mengantar pemesanan barang');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(2, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(3, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(4, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(5, 'ABD. MUTHOLIB', 'dusun bojongsari', '08749494509', 'ahmad@gmail.com', '2020-11-14', '2020-11-15', 'untuk mengantar keluarga');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(6, 'ABD. MUTHOLIB', 'dusun bojongsari', '08749494509', 'ahmad@gmail.com', '2020-11-14', '2020-11-15', 'untuk mengantar keluarga');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(7, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(8, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(9, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(10, 'ilham', 'dusun jeruk timur', '087848484542', 'ilham-kur@gmail.com', '2020-11-18', '2020-11-19', 'untuk sumbangan semen ke masjid ');
INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES(11, 'ABD. MUTHOLIB', '', '', 'abitholibrgi@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(108, 'paseseh', '$2y$10$RqATiLM0IfkLuimXGVCxeO6Chh9Q/KqOZLtH6hr/qnZByJkxH0GYu', 'paseseh@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(113, 'tholib', '$2y$10$R81vroWwBcKQAWtjyVZQXeRpgnAXY4X.sSmNzdpd7ZxJo5M96MhQC', 'abitholib@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(115, 'grudo', '$2y$10$.pT/8qhCRYvKFc9N86BRz.Z68RXaa6PgzqRS08fAmq4K9XzAcXXXm', 'rgigrudo02@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(116, 'kopi', '$2y$10$.T19212non3TI./dFmzIHez7i1tOrnbljKF.ld7cg/lm8x3srwSZm', 'ayongopi@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(117, 'admin', '$2y$10$TBSUDidn2s2V83jWgwswSeGLWtXFvzVADblYDrhGydd1faJTSbFA.', 'adminpaseseh@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(118, 'sayur', '$2y$10$cDgIZs.9fa2MF.8zD1uNNODCb1SDuX2gxxY9uo2woiyp6ADeXL4vK', 'sayur@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(119, 'ngopi', '$2y$10$uz.nPMtVYsd.8XemFFYHyOHuYhRcev.o5B5P0WpeXhlEfY4PRu5aS', 'ayongopi@gmail.com');
INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES(121, 'akusuka', '$2y$10$Wuegw8pRhzWsbONjPH78MeVo27DkUbhIKG/kQRxPVMskRNBf6RhXi', 'onkeypres@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suaraRakyat`
--

CREATE TABLE `suaraRakyat` (
  `id` int(11) NOT NULL,
  `namaLaporan` varchar(255) NOT NULL,
  `jenisLaporan` varchar(255) NOT NULL,
  `lokasiKejadian` varchar(50) NOT NULL,
  `tanggalKejadian` date NOT NULL,
  `kategoriLaporan` varchar(64) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suaraRakyat`
--

INSERT INTO `suaraRakyat` (`id`, `namaLaporan`, `jenisLaporan`, `lokasiKejadian`, `tanggalKejadian`, `kategoriLaporan`, `foto`) VALUES(2563, 'kenapa PLN mati terus???', 'Topik Lain', 'desa kita?', '2020-11-19', 'Rahasia', 'sun.png');
INSERT INTO `suaraRakyat` (`id`, `namaLaporan`, `jenisLaporan`, `lokasiKejadian`, `tanggalKejadian`, `kategoriLaporan`, `foto`) VALUES(2565, 'assalamualaikum bapak kades, mohon ijin seminggu yang yang lalu tepatnya hari selasa tanggal 14 november saya ingin di begal sama 3 orang di jalan masuk desa paseseh timur. mohon bapak kades segera menindak lanjuti laporan ini sebelum adanya korban.', 'Perlindungan Masyarakat', 'paseseh timur', '2020-11-21', 'Rahasia', '');
INSERT INTO `suaraRakyat` (`id`, `namaLaporan`, `jenisLaporan`, `lokasiKejadian`, `tanggalKejadian`, `kategoriLaporan`, `foto`) VALUES(2566, 'bapak kades yang terhormat bagaimana bapak mampu menjadi terhormat apabila bawaan bapak tidak punya etika terhadap masyarat kecil kemaren saya melihat sendiri bahwa sekertaris bapak meminta upah untuk pembuatan E-ktp', 'Topik Lain', 'dusun kramat', '2020-11-22', 'Rahasia', '');
INSERT INTO `suaraRakyat` (`id`, `namaLaporan`, `jenisLaporan`, `lokasiKejadian`, `tanggalKejadian`, `kategoriLaporan`, `foto`) VALUES(2567, 'saya penduku baru di dusun pasean timur, mungkin bapak kades bisa memberitahu saya bagiamana cara membuat akte kelahiran,?', 'Kesehatan', 'dusun pasean timur', '2020-11-22', 'Anonim', 'FB_IMG_15897247860891230.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratOnline`
--

CREATE TABLE `suratOnline` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jenisSurat` varchar(50) DEFAULT NULL,
  `pesan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratOnline`
--

INSERT INTO `suratOnline` (`nik`, `nama`, `alamat`, `email`, `jenisSurat`, `pesan`) VALUES('021424151241', 'ABD. MUTHOLIB', 'rt 02 rw 04 no 35', 'abitholibrgi@gmail.com', 'Surat Keterangan Usaha', 'saya ingin membuat surat izin usaha mohon informasinya terkait permohonan saya.');
INSERT INTO `suratOnline` (`nik`, `nama`, `alamat`, `email`, `jenisSurat`, `pesan`) VALUES('2341541245', 'Margono', 'dusun kramat kampung penaburan', 'margonoindo@gmail.com', 'Surat Keterangan Miskin', 'saya ingin membuat surat keterangan tidak mampu mohon informasinya ');
INSERT INTO `suratOnline` (`nik`, `nama`, `alamat`, `email`, `jenisSurat`, `pesan`) VALUES('541425345', 'Moh Rizki', 'dusun paseseh timur', 'rizkiaja12341@gmail.com', 'Surat Keterangan Penghasilan', 'assalamualaikum bapak kades, alhamdulillah usaha saya lumayan lancar sekarang saya ingin membuat surat penghasilan guna untuk membayar pajak');
INSERT INTO `suratOnline` (`nik`, `nama`, `alamat`, `email`, `jenisSurat`, `pesan`) VALUES('542134565110', 'ilham', 'desa kebon wetan', 'ilham-kur@gmail.com', 'Surat Keterangan Kematian', 'ijin bapak kades mohon informasinya saya butuh surat kematian bapak saya..');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobilRakyat`
--
ALTER TABLE `mobilRakyat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suaraRakyat`
--
ALTER TABLE `suaraRakyat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratOnline`
--
ALTER TABLE `suratOnline`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `suaraRakyat`
--
ALTER TABLE `suaraRakyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2568;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
