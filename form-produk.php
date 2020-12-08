<?php 
    session_start();
    
    if( !isset( $_SESSION["loginProduk"])){
        header("location:login-produk.php");
        exit;
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

    <title> Form Produk Masyarakat</title>
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
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm.wisata.php">WISATA DESA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="hlm-struktur.php">STOK DESA</a></li>
                        <li class="btn btn-outline-dark my-2 my-sm-0"><a class="js-scroll-trigger" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                        HUBUNGI KAMI</a></li>
                    </ul>
                </div>
       </nav>
    <!-- form daftar mobil -->
    <section id="form-produk">
        <div class="container">
            <h1>Form Produk Masyarakat</h1> <hr> <br>

            <form action="proses-simpan-produk.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                         <label for="namaProduk">Nama Produk :</label>
                         <input type="text" class="form-control" name="namaProduk" required>
                    </div>
                </div>
                <div class="form-group">
                     <label for="tipeProduk">Kategori Produk:</label>
                        <select class="form-control" name="tipeProduk">
                            <option>Pilih..</option>
                            <option>Kerajinan tangan</option>
                            <option>Makanan</option>
                            <option>Elektronik</option>
                            <option>Kesehatan</option>
                            <option>Lain-lain</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi :</label>
                     <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                         <label for="harga">Harga:</label>
                         <input type="number" class="form-control"  name="harga" required>
                    </div>
                </div> 
                <div class="form-group mb-4">
                    <label for="foto">Pilih foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>  
                <input type="hidden" name="vendor" value="<?php echo $_SESSION['user']; ?>">
                <button class="btn btn-primary text-center" type="submit" id="daftar" name="daftar">DAFTAR</button>
            </form>
        </div>
    </section>

    <!-- footer -->
    <section id="footer" class="bg-light">
        <div class="container ">
            <div class="footer m-4">
                <div class="row p-5 ">
                    <div class="col-xl col-md-4 text-center">
                        <img src="gambar/log.png" alt="gambar" style="width:px; height:100px;">
                        <h5>PEMDES PASESEH</h5>
                    </div>
                    <div class="col-xl col-md-4">
                        <h4>CONTACT INFORMASI</h4>
                        <p>Alamat : jalan raya Tanjum bumi no 4 <br>
                        Desa Paseseh Kecamatan Tanjung Bumi Kabupaten Bangkalan</p>
                    </div>
                    <div class="col-xl col-md-4 text-white ml-5">
                        <a href=""><i class="fas fa-phone" style="font-size:20px;"></i> 0878-4949-4509</a> <br>
                        <a href=""><i class="fab fa-facebook" style="font-size:20px;"></i> Pemdes Paseseh</a> <br> 
                        <a href=""><i class="fab fa-twitter" style="font-size:20px;"></i> @PemdesPaseseh</a> <br>
                        <a href=""><i class="fab fa-instagram" style="font-size:20px;"></i> Pemdes Paseseh</a> <br>
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