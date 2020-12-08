<?php

require('config.php');

   // cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nL = $_POST['namaLaporan'];
    $jL = $_POST['jenisLaporan'];
    $tK = $_POST['tanggalKejadian'];
    $lK = $_POST['lokasiKejadian'];
    $kL = $_POST['kategoriLaporan'];

    // buat query update
    $sql = "UPDATE suaraRakyat SET namaLaporan='$nL', jenisLaporan='$jL', tanggalKejadian='$tK', lokasiKejadian='$lK', kategoriLaporan='$kL' WHERE id=$id";
    $query = mysqli_query($dbconn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: hlm-aduan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
