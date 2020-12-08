<?php

require('config.php');


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nik    = $_POST['nik'];
    $nama   = $_POST['nama'];
    $alamat =$_POST['alamat'];
    $Email   = $_POST['email'];
    $jS      =$_POST['jenisSurat'];
    $pesan  =$_POST['pesan'];

    // buat query
    $sql = "INSERT INTO suratOnline(nik, nama, alamat, email, jenisSurat, pesan)
     VALUES('$nik','$nama', '$alamat','$Email','$jS', '$pesan')";
    $query = mysqli_query($dbconn, $sql);
    // echo $sql;
     

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:form-surat.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:form-surat.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>