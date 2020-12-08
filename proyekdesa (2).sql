-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Des 2020 pada 10.58
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
-- Database: `proyekdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `tipeBerita` varchar(250) NOT NULL,
  `judulBerita` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idBerita`, `tipeBerita`, `judulBerita`, `tanggal`, `isi`, `penulis`, `foto`) VALUES
(25, 'Sosial', 'Kunjungan Ibu Khofifah ke salah satu toko batik Tanjung Bumi', '2020-07-25', 'Sabtu, 25 Juli 2020, Khofifah didampingi, Bupati Bangkalan R Abdul Latif Amin Imron, Kadis Perindag Provinsi, Kadis Peternakan, Kepala Biro Kesos, dan Kepala Biro Humas Protokol Setda Provinsi Jatim, melihat langsung.\r\n\r\nGubernur Khofifah bersyukur, para pedagang batik sejak akhir Mei, Juni dan Juli di Tanjung Bumi sudah mulai normal. Dia menyebut sebagai kabar bahagia, karena di awal Maret macet.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\"Alhamdulilah, hari ini saya mendapat kabar bahagia, karena rupanya sejak akhir Mei hingga Juli ini penjualan batik di Tanjung Bumi sudah bisa disebut normal,\" tukas Khofifah.\r\n\r\nMenurutnya, keberadaan Tanjung Bumi merupakan sejarah panjang dan melegenda dari pembatik tulis di negeri ini.\r\n\r\nUntuk itu, kekayaan budaya dari para pembatik tradisional ini menjadi tanggung jawab Pemerintah untuk melestarikan, mengembangkan dan mempromosikan. Terlebih, salah satu andalan ekonomi Jatim adalah Textile Product Textile (TPT), yakni batik.\r\n\r\nSebagai produk tekstil maka budaya membatik di Tanjung Bumi ini harus mendapatkan ruang untuk promo pasarnya. Karena makin besar pasarnya maka tentu kreativitas dan inovasi dari para pembatik akan terus tersupport,” urai orang nomor satu di Pemprov Jatim ini.\r\n\r\n“Tadi juga ditunjukkan ada koleksi batik yang usianya sudah puluhan tahun. Hal ini sebenarnya untuk menunjukkan betapa detail dan lamanya proses untuk menghasilkan selembar batik ini,” lanjutnya.\r\n\r\nKhofifah, berharap pemulihan ekonomi di Jatim bisa segera diwujudkan. Serta, akan bisa segera didetailkan pada unit usaha dan komoditasnya apa. Semisal, sektor perdagangan unit usaha apa , komoditasnya apa saja yang akan didorong, begitupun juga untuk sektor lainnya.\r\n\r\nPemilik toko batik di Tanjung Bumi Hanif Muslim mengatakan, bahwa awal adanya Covid-19 batik terjual beberapa potong saja. Hampir 3 bulan, padahal sebelum Covid-19, sehari bisa 10 lembar kain terjual.\r\n\r\n“Alhamdulilah sejak Idul Fitri kemarin sampai sekarang penjualan sudah mulai agak normal. Meski belum 100 persen, tapi saya sangat bersyukur,” ungkap Hanif yang juga mengaku sangat bangga bisa dikunjungi langsung oleh Gubernur Khofifah.\r\n\r\nHanif pun berharap, pandemi Covid-19 bisa segera berakhir di Indonesia terutama di Jatim. Dengan demikian, maka geliat ekonomi sentra batik Tanjung Bumi akan bisa segera bangkit seperti sedia kala.', 'Refrensi: Nusadaily.com', 'batik9.jpg'),
(26, 'Keagamaan', 'Persatuan adalah Simbol Kekuatan', '2020-12-02', 'Muhammadiyah dan Nahdlatul Ulama (NU), adalah dua organisasi terbesar di Indonesia, maka jika keduanya bersatu maka akan menjadi sebuah kekuatan besar di Tanah Air. Bahkan, jika keduanya solid diyakini akan mampu menangkal segala persoalan bangsa. \r\n\r\nKetika Indonesia menghadapi pasang surut perjuangan dalam mengusir penjajah, ketika menumpas paham-paham yang bertentangan dengan Pancasila di tahun 1965 NU dan Muhammadiyah-lah yang paling depan. Ketika era reformasi runtuhnya orde baru ada KH Abdurrahman Wahid dan Amien Rais adalah tokoh di garda terdepan. \r\n\r\nMaka dari itu kita harus terus menjaga persatuan ini.', 'Tholib_art', 'Nu.jpg'),
(27, 'Budaya', 'Kerapan sapi Madura', '2020-12-04', 'Karapan sapi yang merupakan perlombaan pacuan sapi yang berasal dari Madura Jawa Timur, bagi kebanyakan masyarakat Madura karapan sapi tidak hanya sebuah pesta rakyat atau acara yang diselenggarakan tiap tahun yang diwarisi secara turun temurun. Tetapi karapan sapi bagi masyarakat Madura adalah bentuk symbol prestise yang dapat mengangkat harkat dan martabat masyarakat Madura, karena sapi yang digunakan untuk pertandingan merupakan sapi sapi yang berkualitas sangat baik tentu dengan perlakuan yang istimewa pula.\r\n\r\nPulau Madura tidak hanya dikenal sebagai penghasil garam, tetapi juga penghasil sapi sapi pacuan yang berkualitas sangat baik. Tidak jarang sang pemilik sapi mempersiapkan sapi pacuannya dengan memberikan pijatan khusus dan makanan tidak kurang dari 80 butir telur setiap harinya, agar stamina dan kekuatan sapi sapi tersebut terjaga. Bahkan perlakuan istimewa sapi sapi tersebut dibeberapa rumah terlihat ada yang menghiasi garasi bukan kendaraan mobil tetapi malah sapi tersebut yang berada digarasi rumah. Maklum saja karena untuk sapi yang memenangkan pertandingan dapat mencapai harga Rp 75 juta per ekornya.\r\n\r\nDalam perayaan karapan sapi ini, harga diri para pemilik sapi dipertaruhkan. Kalau mereka dapat memenangkan pertandingan, selain hadiah uang didapat biasanya hadiah dari pertaruhan juga mereka dapatkan. Kalau mereka kalah dalam pertandingan ini, harga diri pemilik jatuh dan mereka habis uang yang tidak sedikit untuk karapan sapi ini. Karena perawatan sapi – sapi sebelum pertandingan mahal, dan biasanya mereka menyewa dukun agar menjaga sapinya selamat dari serangan jampi-jampi musuh mereka.\r\n\r\nPerayaan besar karapan sapi ini diadakan 1 kali dalam setahun, tetapi untuk menuju final harus memenuhi beberapa tahapan terlebih dahulu. Ada dua macam perayaan karapan sapi dimadura, yang pertama adalah Presiden Cup dan Bupati Cup. Untuk Bupati cup biasanya diadakan 2 kali dalam setahun, para pemenang dari bupati cup ini biasanya akan melanjutkan pertandingannya ke Presiden cup, untuk para fotografer momen yang bagus adalah pada saat Bupati Cup. Karena Bupati Cup biasanya diadakan dipinggiran kota, garis pembatas hanya terbuat dari anyaman bambu yang membuat acara ini semakin tradisional, tetapi faktor keamanan karapan sapi Bupati Cup ini sangat kurang jadi berhati hatilah pada saat mengambil momen foto. Yang meriah setelah bupati cup adalah Presiden Cup, acara ini sangat meriah dan ramai. Karena sebagian besar yang mengikuti Presiden Cup ini biasanya adalah para pemenang di Bupati Cup, acara besar ini diselenggarakan di kota Bangkalan dan perayaannya antara bulan September atau Oktober.\r\n\r\nDalam even karapan sapi para penonton tidak hanya disuguhi adu cepat sapi dan ketangkasan para jokinya, tetapi sebelum memulai para pemilik biasanya melakukan ritual arak-arakan sapi disekelilingi pacuan disertai alat musik seronen perpaduan alat musik khas Madura sehingga membuat acara ini menjadi semakin meriah.\r\n\r\nPanjang rute lintasan karapan sapi tersebut antara 180 sampai dengan 200 meter, yang dapat ditempuh dalam waktu 14 sd 18 detik. Tentu sangat cepat kecepatan sapi – sapi tersebut, selain kelihaian joki terkadang bamboo yang digunakan untuk menginjak sang joki melayang diudara karena cepatnya kecepatan sapi sapi tersebut. Untuk memperoleh dan menambah kecepatan laju sapi tersebut sang joki, pangkal ekor sapi dipasangi sabuk yang terdapat penuh paku yang tajam dan sang joki melecutkan cambuknya yang juga diberi duri tajam kearah bokong sapi. Tentu saja luka ini akan membuat sapi berlari lebih kencang, tetapi juga menimbulkan luka disekitar pantat sapi. Setelah bertanding sapi tersebut diberikan beberapa waktu agar luka itu sembuh, tetapi sapi yang dipertandingan dikarapan ini hanya 2 sampai dengan 3 kali saja diberikan pertandingan dan tidak boleh lebih.\r\n\r\nJarak pemenang terkadang selisih sangat tipis, bahkan tidak jarang hanya berjarak 1 sampai dengan 2 detik saja, dan hal ini terkadang membuat pihak yang kalah memprotes. Tetapi mereka diberikan kesempatan untuk bertanding lagi dengan yang kalah, dan saat yang membahagiakan bagi para pemenang. Selain mendapat hadiah, biasanya hadiah taruhan jg mereka dapatkan. Selain harga sapi pemenang dapat membumbung tinggi harganya.\r\n\r\nKarapan Sapi di Madura merupakan pagelaran yang sangat unik, selain sudah diwarisi secara turun menurun tradisi ini juga terjaga sampai sekarang. Even ini dijadikan sebagai even pariwisata di Indonesia, dan tidak hanya turis local dari mancanegara pun banyak yang menyaksikan karapan sapi ini. Semoga kedepannya semakin meriah dan ajang taruhan yang menghiasi karapan sapi tersebut bisa hilang. Kalau Anda mampir ke Surabaya, tidak ada salahnya melihat jadwal dan menonton karapan sapi tersebut.[Barrykusuma/IndonesiaKaya]', 'Barry Kusuma', 'kerapan.jpg'),
(30, 'Keagamaan', 'Tumbuhkan Motivasi Belajar dengan Meniadakan Kursi Kantin', '2020-12-05', 'dasshajasdkadsa\r\n\r\n\r\n<img src=\"http://perangkatdesa.rgijatim.com/gambar/kades.png\" >', 'Referensi :NUOnline.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataKtps`
--

DROP TABLE IF EXISTS `dataKtps`;
CREATE TABLE `dataKtps` (
  `nik` int(16) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempaLahir` varchar(250) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `golonganDarah` varchar(2) DEFAULT NULL,
  `alamat` varchar(250) NOT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `statusPerkawinan` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `berlakuHingga` date DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `tandaTangan` varchar(250) DEFAULT NULL,
  `tanggalPembuatan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataKtps`
--

INSERT INTO `dataKtps` (`nik`, `nama`, `tempaLahir`, `tanggalLahir`, `jenisKelamin`, `golonganDarah`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `statusPerkawinan`, `agama`, `kewarganegaraan`, `berlakuHingga`, `provinsi`, `kota`, `foto`, `tandaTangan`, `tanggalPembuatan`) VALUES
(987654321, 'Tholib', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01'),
(987654322, 'Ilham', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01'),
(987654323, 'Rizki', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01'),
(987654324, 'Farhan', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01'),
(987654325, 'Haryo', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01'),
(987654326, 'khabab', 'Bangkalan', '1996-05-11', 'L', 'O', 'jln raya tanjung bumi no 4 rt/rw 04/05 desa paseseh kecamatan tanjung bumi kabupaten bangkalan', '04', '05', 'paseseh', 'Tanjung Bumi', 'Belum', 'Islam', 'Indonesia', '2020-11-21', 'Jawa Timur', 'Bangkalan', 'tholib.jpg', NULL, '2020-04-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataPenduduk`
--

DROP TABLE IF EXISTS `dataPenduduk`;
CREATE TABLE `dataPenduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataPenduduk`
--

INSERT INTO `dataPenduduk` (`id`, `nama`, `jumlah`) VALUES
(1, 'penduduk', '9550'),
(2, 'kepala_keluarga', '3651'),
(3, 'anggota_keluarga', '2211'),
(4, 'laki-laki', '5000'),
(5, 'perempuan', '4550');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobilRakyat`
--

DROP TABLE IF EXISTS `mobilRakyat`;
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

INSERT INTO `mobilRakyat` (`id`, `nama`, `alamat`, `noHp`, `email`, `tanggalPinjam`, `tanggalKembali`, `keperluan`) VALUES
(1, 'Khabab', 'Dusun Gelagah', '087856645152', 'khabab@gmail.com', '2020/11/01', '2020/11/01', 'Untuk mengantar pemesanan barang'),
(2, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan'),
(3, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan'),
(4, 'Khabab', 'Dusun Bujur', '087845451542', '', '11/11/2020', '12/11/2020', 'mengantar dagangan'),
(5, 'ABD. MUTHOLIB', 'dusun bojongsari', '08749494509', 'ahmad@gmail.com', '2020-11-14', '2020-11-15', 'untuk mengantar keluarga'),
(6, 'ABD. MUTHOLIB', 'dusun bojongsari', '08749494509', 'ahmad@gmail.com', '2020-11-14', '2020-11-15', 'untuk mengantar keluarga'),
(7, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq'),
(8, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq'),
(9, 'Margono', 'wewqeqq', '54644564456', 'margonoindo@gmail.com', '2020-11-16', '2020-11-17', 'qweqweqweqwewq'),
(10, 'ilham', 'dusun jeruk timur', '087848484542', 'ilham-kur@gmail.com', '2020-11-18', '2020-11-19', 'untuk sumbangan semen ke masjid '),
(11, 'ABD. MUTHOLIB', '', '', 'abitholibrgi@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaProduk` varchar(250) NOT NULL,
  `tipeProduk` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `namaProduk`, `tipeProduk`, `deskripsi`, `harga`, `foto`, `status`) VALUES
(1, 'kripik', '', 'kripik singkong babahong', '1200', 'foto.jpg', ''),
(2, 'kripik sikat', '', 'sikat gigi', '1300', 'foto.jpg', ''),
(4, 'kripik singkong', '', 'kripik singkong enak renyah dan gurih', '12000', 'bagus.png', ''),
(5, 'Laptop', 'Elektronik', 'Laptop model DELL type cor-i5 ivination', '4000000', 'dell.jpg', ''),
(6, 'kripik macan', 'Makanan', 'kripik macan makanan khas dusun kramat', '5000', 'kripik.png', ''),
(7, 'kripin ubi tela', 'Makanan', 'makanan khas dusun paseseh timur', '5000', 'kripik.png', 'pending'),
(8, 'Laptop', 'Elektronik', 'jdasdhgvad', '20000', '', 'pending'),
(9, 'kripik singkong', 'Kerajinan tangan', 'dasdasd', '1230', '', 'pending'),
(10, 'Kamera', 'Elektronik', 'KAMERA CANON D1000', '2300000', 'Habib-Umar-Bin-Hafidz-wallpaper25.jpg', 'pending'),
(11, 'KAMERA', 'Elektronik', 'kamera bagus baru dipakai 2 minggu butuh dana cepat', '1500000', 'g.jpg', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE `registrasi` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `email`) VALUES
(108, 'paseseh', '$2y$10$RqATiLM0IfkLuimXGVCxeO6Chh9Q/KqOZLtH6hr/qnZByJkxH0GYu', 'paseseh@gmail.com'),
(113, 'tholib', '$2y$10$R81vroWwBcKQAWtjyVZQXeRpgnAXY4X.sSmNzdpd7ZxJo5M96MhQC', 'abitholib@gmail.com'),
(115, 'grudo', '$2y$10$.pT/8qhCRYvKFc9N86BRz.Z68RXaa6PgzqRS08fAmq4K9XzAcXXXm', 'rgigrudo02@gmail.com'),
(116, 'kopi', '$2y$10$.T19212non3TI./dFmzIHez7i1tOrnbljKF.ld7cg/lm8x3srwSZm', 'ayongopi@gmail.com'),
(117, 'admin', '$2y$10$TBSUDidn2s2V83jWgwswSeGLWtXFvzVADblYDrhGydd1faJTSbFA.', 'adminpaseseh@gmail.com'),
(118, 'sayur', '$2y$10$cDgIZs.9fa2MF.8zD1uNNODCb1SDuX2gxxY9uo2woiyp6ADeXL4vK', 'sayur@gmail.com'),
(119, 'ngopi', '$2y$10$uz.nPMtVYsd.8XemFFYHyOHuYhRcev.o5B5P0WpeXhlEfY4PRu5aS', 'ayongopi@gmail.com'),
(121, 'akusuka', '$2y$10$Wuegw8pRhzWsbONjPH78MeVo27DkUbhIKG/kQRxPVMskRNBf6RhXi', 'onkeypres@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasiProduk`
--

DROP TABLE IF EXISTS `registrasiProduk`;
CREATE TABLE `registrasiProduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nomerTelepon` varchar(16) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasiProduk`
--

INSERT INTO `registrasiProduk` (`id`, `nama`, `alamat`, `nomerTelepon`, `email`, `foto`) VALUES
(1, 'tholib', 'tlokoh', '087849494509', 'abitholib@gmail.com', NULL),
(2, 'ABD. MUTHOLIB', 'dusun bojongsari', '08549494508', 'abitholibrgi@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suaraRakyat`
--

DROP TABLE IF EXISTS `suaraRakyat`;
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

INSERT INTO `suaraRakyat` (`id`, `namaLaporan`, `jenisLaporan`, `lokasiKejadian`, `tanggalKejadian`, `kategoriLaporan`, `foto`) VALUES
(2563, 'kenapa PLN mati terus???', 'Topik Lain', 'desa kita?', '2020-11-19', 'Rahasia', 'sun.png'),
(2565, 'assalamualaikum bapak kades, mohon ijin seminggu yang yang lalu tepatnya hari selasa tanggal 14 november saya ingin di begal sama 3 orang di jalan masuk desa paseseh timur. mohon bapak kades segera menindak lanjuti laporan ini sebelum adanya korban.', 'Perlindungan Masyarakat', 'paseseh timur', '2020-11-21', 'Rahasia', ''),
(2566, 'bapak kades yang terhormat bagaimana bapak mampu menjadi terhormat apabila bawaan bapak tidak punya etika terhadap masyarat kecil kemaren saya melihat sendiri bahwa sekertaris bapak meminta upah untuk pembuatan E-ktp', 'Topik Lain', 'dusun kramat', '2020-11-22', 'Rahasia', ''),
(2567, 'saya penduku baru di dusun pasean timur, mungkin bapak kades bisa memberitahu saya bagiamana cara membuat akte kelahiran,?', 'Kesehatan', 'dusun pasean timur', '2020-11-22', 'Anonim', 'FB_IMG_15897247860891230.jpg'),
(2568, 'ilham nakal', 'Topik Lain', 'lereng bukit jeddih', '2020-11-26', 'Rahasia', ''),
(2569, 'ilham nakal', 'Topik Lain', 'lereng bukit jeddih', '2020-11-26', 'Rahasia', ''),
(2570, 'ilham nakal', 'Topik Lain', 'lereng bukit jeddih', '2020-11-26', 'Rahasia', ''),
(2571, 'rizki nakal', 'Topik Lain', 'rgi', '2020-11-19', 'Pilih..', ''),
(2572, 'haryo ganteng', 'Agama', 'lereng bukit jeddih', '2020-11-18', 'Anonim', ''),
(2573, 'haryo ganteng', 'Agama', 'lereng bukit jeddih', '2020-11-18', 'Rahasia', 'g.jpg'),
(2574, 'haryo ganteng', 'Agama', 'lereng bukit jeddih', '2020-11-18', 'Rahasia', 'Habib-Umar-Bin-Hafidz-wallpaper25.jpg'),
(2575, 'haryo ganteng', 'Agama', 'lereng bukit jeddih', '2020-11-18', 'Rahasia', 'Habib-Umar-Bin-Hafidz-wallpaper25.jpg'),
(2576, 'farhan uwu', 'Corona Virus', 'lereng bukit jeddih', '2020-11-19', 'Anonim', ''),
(2577, 'gsdgg', 'Corona Virus', 'gfdgdfg', '2020-11-20', 'Anonim', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratOnline`
--

DROP TABLE IF EXISTS `suratOnline`;
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

INSERT INTO `suratOnline` (`nik`, `nama`, `alamat`, `email`, `jenisSurat`, `pesan`) VALUES
('021424151241', 'ABD. MUTHOLIB', 'rt 02 rw 04 no 35', 'abitholibrgi@gmail.com', 'Surat Keterangan Usaha', 'saya ingin membuat surat izin usaha mohon informasinya terkait permohonan saya.'),
('2341541245', 'Margono', 'dusun kramat kampung penaburan', 'margonoindo@gmail.com', 'Surat Keterangan Miskin', 'saya ingin membuat surat keterangan tidak mampu mohon informasinya '),
('541425345', 'Moh Rizki', 'dusun paseseh timur', 'rizkiaja12341@gmail.com', 'Surat Keterangan Penghasilan', 'assalamualaikum bapak kades, alhamdulillah usaha saya lumayan lancar sekarang saya ingin membuat surat penghasilan guna untuk membayar pajak'),
('542134565110', 'ilham', 'desa kebon wetan', 'ilham-kur@gmail.com', 'Surat Keterangan Kematian', 'ijin bapak kades mohon informasinya saya butuh surat kematian bapak saya..');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `dataKtps`
--
ALTER TABLE `dataKtps`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `dataPenduduk`
--
ALTER TABLE `dataPenduduk`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasiProduk`
--
ALTER TABLE `registrasiProduk`
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
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `dataPenduduk`
--
ALTER TABLE `dataPenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `registrasiProduk`
--
ALTER TABLE `registrasiProduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suaraRakyat`
--
ALTER TABLE `suaraRakyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2578;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
