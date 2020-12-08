<?php

require('config.php');


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noHp   = $_POST['noHp'];
    $email  =$_POST['email'];
    $tglPinjam = $_POST['tanggalPinjam'];
    $tglKembali = $_POST['tanggalKembali'];
    $kebutuhan  =$_POST['keperluan'];

    // buat query
    $sql = "INSERT INTO mobilRakyat(nama, alamat, noHp, email, tanggalPinjam, tanggalKembali, keperluan)
     VALUES('$nama', '$alamat', '$noHp', '$email', '$tglPinjam', '$tglKembali', '$kebutuhan')";
    $query = mysqli_query($dbconn, $sql);
    echo $query;
     

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: hlm-mobil-siaga.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:hlm-mobil-siaga.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>