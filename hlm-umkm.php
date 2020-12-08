
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
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- google chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> Halaman UMKM</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
        <a class="navbar-brand ml-4" href="#"> <img src="gambar/log.png" alt="gambar"></a>
        <a class="navbar-brand" href="#"><span class="paseseh">Pemdes Paseseh</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         Menu <i class="fas fa-bars ml-1"></i>
        </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="js-scroll-trigger" href="index.php">BERANDA</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="">PROFILE</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="hlm-berita.php">BERITA</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="hlm-publik.php">LAYANAN</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="hlm-wisata.php">WISATA</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="hlm-struktur.php">STRUKTUR</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                        HUBUNGI KAMI</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger" href="card.php">CARD</a></li>
                    </ul>
                </div>
       </nav>
       <div class="float-right">
            <a href="login-produk.php" class="btn btn-info ml-auto mr-4 fixed">DAFTARKAN PRODUK ANDA</a>
         </div>

    <!-- judul -->
    <section>
              <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
    </section>
    <section id="judul">
        <div class="container text-center">
             <img src="gambar/log.png" alt="gambar" style="width:px; height:200px;"> <hr>
                <h1 class="logoukm"> Produk Umkm Desa <span class="alang">Paseseh </span></h1>
        </div>

    </section>
    <!-- halaman awal -->
    <section id="awal">
        <div class="container">
            <div class="row m-2">
                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/gentongan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BATIK</h5>
                            <p class="card-text">Batik Tanjung Bumi jenis patterns.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 760.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/Batik-Patterns.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BATIK</h5>
                            <p class="card-text">Batik Tanjung Bumi jenis Asahan.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 150.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/b2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BATIK</h5>
                            <p class="card-text">Batik Tanjung Bumi jenis Merpati.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 600.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/b1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BATIK</h5>
                            <p class="card-text">Batik Tanjung Bumi jenis Sempar.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 865.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </section>
    <!-- ukm -->
    <section id="ukm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/J.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KAMERA</h5>
                                <p class="card-text">CAMERA PRO CONON D1300.</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 2.500.000</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/k.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KAMERA</h5>
                                <p class="card-text">CAMERA PRO CONON D2000.</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 3.500.000</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/dell.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAPTOP</h5>
                                <p class="card-text">DELL Inspiron Core i5</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 4.350.000</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="awal">
        <div class="container">
            <div class="row m-2">
                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/kerajianan-lampu.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">KREASI LAMPU</h5>
                            <p class="card-text">Kreasi kerajinan lampu dari bahan kardus .</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 20.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/kerajinan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">KERAJINAN</h5>
                            <p class="card-text">Kerajinan dari bahan sedotan.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 25.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/kerajinan-dari-kardus-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">KERAJINAN</h5>
                            <p class="card-text">Kerajinan dari bahan kardus.</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 15.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                     <div class="card">
                        <img src="gambar/b1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">KERAJINAN</h5>
                            <p class="card-text">Kerajinan vigora dari bahan kardus .</p>
                            <p class="mb-1">
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                            <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                            </p>
                            <a href="#" class="btn btn-primary">Rp: 865.000</a>
                            <a href="#" class="btn btn-info">BELI</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </section>

    <section id="ukm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/krupuk.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KRUPUK IKAN</h5>
                                <p class="card-text">Krupuk ikan khas Tanjung Bumi.</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 15.000/pcs</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/krupuk-ikan.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KRUPUK IKAN BAROKAH</h5>
                                <p class="card-text">CAMERA PRO CONON D2000.</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 3.500.000</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="gambar/dell.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAPTOP</h5>
                                <p class="card-text">DELL Inspiron Core i5</p>
                                <p class="mb-1">
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star" style="color:#e3f115; font-size:25px;"></i>
                                <i class="fas fa-star-half-alt" style="color:#e3f115; font-size:25px;"></i>
                                </p>
                                <a href="#" class="btn btn-primary">Rp: 4.350.000</a>
                                <a href="#" class="btn btn-info">BELI</a>
                            </div>
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="desa.js"></script>

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