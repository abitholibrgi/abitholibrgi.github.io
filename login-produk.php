<?php 
  
  session_start();

  require('config.php');

if(isset($_POST['nik'])){
    

    $nik   = $_POST["nik"];
    $nama  = $_POST["nama"];

    // echo '<pre>' . $nik . '</pre>';
    // echo '<pre>' . $nama . '</pre>';

    // untuk mengecek apakah ada atau tidak usernamae tertentu di dalam database
   $result =mysqli_query($dbconn, "SELECT * FROM dataKtps WHERE nik ='$nik'");

        // cek username
        if( mysqli_num_rows($result) === 1){

           // set sessions
           $_SESSION["loginProduk"] = true;
  
        // login sukses, alihkan ke halaman timeline
        header("Location:registrasi-produk.php");


    } else{
      header("Location:hlm-umkm.php");
    }
}





?> 

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- link css -->
    <style>
      <?php include 'css/umkm.css'; ?>
    </style>
    <!-- otator -->
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Login</title>
  </head>
  <body>
    <!-- form register -->
    <section id="login">     
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">
               <img class="avatar1" src="gambar/l.svg" alt="gambar" srcset=""  style="width:700px; height:500px;">
          </div>
          <div class="col-md-5">
                  <h1 class="text-center login">LOGIN</h1> <hr class="hr">
                  <img class="avatar2" src="gambar/log2.svg" alt="" srcset="" style="width:200px; height:200px;">
                  <?php if( isset($error)) : ?>
                  <h3 style="color:red; font-style:italic; ">username / password salah </h3>
                  <p></p>
                  <?php endif; ?>
                  
              <form action="" method="POST" enctype="multipart/form-data">
                  
                  <div class="form-group">
                      <label for="nik" class="text-muted"> <i class="fas fa-user"></i> NIK:</label>
                      <input class="form-control" type="text" name="nik" placeholder="Masukkan NIK" >
                  </div>
                  <div class="form-group">
                      <label for="nama" class="text-muted"><i class="fas fa-users"></i> NAMA :</label>
                      <input  type="text"  class="form-control" id="nama" name="nama" placeholder="nama">
                  </div>

                  <input type="submit" class="bawah" value="login" name="login">
              
              </form>
          </div>
        </div>
           
        </div> 
    </section>

    <h3 style="color:red; font-style:italic; "> </h3>
    
    
    <!-- otator script -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="proyek.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>