<?php
session_start();

if(isset($_SESSION["login"])){
  header("location:dasboard-desa.php");
  exit;
}

require('config.php');

// cek apakah tombol lapor sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari form aduan
    $namaPro = $_POST['namaProduk'];
    $tipeProduk = $_POST['tipeProduk'];
    $deskripsi   = $_POST['deskripsi'];
    $harga  =$_POST['harga'];
    $foto = $_FILES['foto']['name'];



    // file upload code starts here
    $target_dir = 'gambar/';
    $target_file = $target_dir . basename($_FILES['foto']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["foto"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    /*
    if ($_FILES["foto"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    */

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
// file upload code ends here




    // buat query
    $sql = "INSERT INTO produk(namaProduk, tipeProduk, deskripsi, harga, foto, status)
     VALUES('$namaPro','$tipeProduk','$deskripsi', '$harga','$foto','pending')";
    // echo $sql;
    // return false;
    $query = mysqli_query($dbconn, $sql);
    
     

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: hlm-umkm.php?status=sukses');
          //  echo "<script>
          //  swal({
          //   title: 'Good job!',
          //   text: 'You clicked the button!',
          //   icon: 'success',
          //   button: 'Aww yiss!',
          // });
          //        </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:hlm-umkm.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>