<?php 
    session_start();

    if( !isset( $_SESSION["loginProduk"])){
        header("location:login-produk.php");
        exit;
    }

    require('config.php');
?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- link css -->
    <style>
      <?php include 'css/publik.css'; ?>
    </style>
    <!-- otator -->
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> Registrasi Produk Masyarakat</title>
  </head>
  <body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand ml-4" href="#"> <img src="gambar/log.png" alt="gambar" style="width:100px; height:100px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         Menu <i class="fas fa-bars ml-1"></i>
        </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="index.php">BERANDA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="">PROFILE</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-berita.php">BERITA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-publik.php">LAYANAN</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-umkm.php">PRODUK DESA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-wisata.php">WISATA DESA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-struktur.php">STOK DESA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                        HUBUNGI KAMI</a></li>
                    </ul>
                </div>
       </nav>
       <!-- <section class="m-5">
            <div class="text-center">
                    <a href="#" class="btn btn-warning ml-auto mr-4 fixed">APAKAH ANDA SUDAH REGISTRASI? JIKA SUDAH SILAHKAN lOGIN</a> <br>
                    <a href="login-produk.php" class="btn btn-info ml-auto mr-4 m-2 fixed">lOGIN</a>
            </div>
        </section> -->
    <!-- form daftar mobil -->
    <section id="form-produk">
        <div class="container">
            <h1>Registrasi Produk Masyarakat</h1> <hr> <br>

            <form action="proses-simpan-regis-produk.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                         <label for="nama">Nama:</label>
                         <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="col-md-6">
                         <label for="alamat">Alamat:</label>
                         <input type="text" class="form-control"  name="alamat" required>
                    </div>
                </div>
                <div class="form-row">
                <div class="col-md-6">
                         <label for="nomerTelepon">Nomer Hp:</label>
                         <input type="number" class="form-control" name="nomerTelepon" required>
                    </div>
                    <div class="col-md-6">
                         <label for="email">email:</label>
                         <input type="text" class="form-control"  name="email" required>
                    </div>
                </div> 
                <div class="form-group mb-4">
                    <label for="foto">Pilih foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>  
                <button class="btn btn-primary text-center" type="submit" id="daftar" name="daftar">REGISTRASI</button>
            </form>
        </div>
    </section>

    <!-- footer -->
    <section id="footer" class="bg-dark">
        <div class="container ">
            <div class="footer">
                <div class="row ">
                    <div class="col-xl col-md-4 text-center">
                        <img src="gambar/logodes.png" alt="gambar" style="width:100px; height:100px;">
                        <h5>PEMDES ALANG-ALANG</h5>
                    </div>
                    <div class="col-xl col-md-4">
                        <h4>CONTACT INFORMASI</h4>
                        <p>Alamat : jalan raya trageh no 4 <br>
                        Desa Alang-alang Kecamatan Trageh Kabupaten Bangkalan</p>
                    </div>
                    <div class="col-xl col-md-4">
                        <a href=""><i class="fas fa-phone" style="font-size:20px;"></i> 0878-4949-4509</a> <br>
                        <a href=""><i class="fab fa-facebook" style="font-size:20px;"></i> Pemdes Alang-alang</a> <br> 
                        <a href=""><i class="fab fa-twitter" style="font-size:20px;"></i> @PemdesAlang-alang</a> <br>
                        <a href=""><i class="fab fa-instagram" style="font-size:20px;"></i> Pemdes Alang-alang</a> <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
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
