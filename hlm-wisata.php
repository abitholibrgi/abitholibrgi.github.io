<?php  $page='wisata'; require('config.php') ; ?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- link css -->
    <style>
      <?php include 'style.css'; ?>
    </style>
    <!-- otator -->
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Niconne&family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
<!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> Halaman Objek Wisata</title>
  </head>
  <body>
     <!-- Navbar -->
     <?php  require('navbar.php') ;?>
     <section>
              <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
    </section>
     <section id="tempat-wisata">
         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gambar/w1.jpg" class="d-block w-100 h-600" alt="" style="width:100%; height:600px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Gili Labak Island</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/w.jpg" class="d-block w-100" alt="..." style="width:100%; height:600px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Coban Rondo</h1>   
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/kapal.jpg" class="d-block w-100 h-600" alt="..." style="width:100%; height:600px;">
                     <div class="carousel-caption d-none d-md-block">
                        <h1>Kapal Syekhona Kholil</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/w10.jpg" class="d-block w-100 h-600" alt="..." style="width:100%; height:600px;">
                     <div class="carousel-caption d-none d-md-block">
                        <h1>Batu Kapur Arosbaya </h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
     </section>
    <!-- judul -->
    <section id="judul">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="garis-vertical"></div>
                </div>

                <div class="col-md-7">
                    <h1 class=""> EXPLO<span>RE</span> </h1>
                    <h4 class=""> Desa Paseseh <br> Tanjung Bumi</h4>
                </div>
                <div class="col-md-3">
                    <img src="gambar/desa1.jpg" alt="gambar" srcset="" style="width:560px; height:300px;">
                </div>
            </div>
        </div>

    </section>

    <!-- halaman awal -->
    <section id="wisata">
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/wbkl.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Bangkalan Icon</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/tj1.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Pantai Biru Tanjung Bumi</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/w6.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Hutan Mati</h5>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/w4.png" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Bukit Kapur Arosbaya</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/w5.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Bukit Jeddih</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/wkokop.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Air Terjung Pancor</h5>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/w7.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Hutan Galis</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/wmarcusuar.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Marcusuar Kamal</h5>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/tj.jpg" class="card-img-top" alt="gambar" style="width:348px; height:320px;">
                           <div class="card-body">
                                <h5 class="card-title">Kampung Batik Tanjung Bumi</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3">  
            <div class="row mb-3">
                <div class="col-6">
                    <a href="gambar/batik6.jpeg" target="_blank"> <img src="gambar/Batik-Patterns.jpg" alt="" style="width:645px; height:400px;" > </a>
                </div>
                <div class="col-6">
                    <a href="gambar/batik9.jpg" target="_blank"> <img src="gambar/batik9.jpg" alt="" style="width:610px; height:400px;" > </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <a href="gambar/b4.jpg" target="_blank"> <img src="gambar/b4.jpg" alt="" style="width:400px; height:350px;" > </a>
                </div>
                <div class="col-md-8">
                    <div class="header1">
                        <h3 class="text-muted text-center">Filosofi Batik Tanjung Bumi</h3> <hr>
                        <div class="content">
                            <h5 class="batik">
                             Filosofi Batik Tanjung Bumi Selain sarat makna, batik Tanjung Bumi juga istimewa
                             dari kualitas batiknya.
                             warna-warnanya tegas khas masyarakat pesisir. Coraknya yang indah karena didominasi 
                             oleh tanaman, menggambarkan kehidupan sebagian masyarakatnya yang juga berprofesi 
                             sebagai petani selain nelayan. <br>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_tpzqMikoGU?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-4">
                    <h5 class="jalan"> Jalan-jalan Ke desa Batik Tanjung Bumi</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- ukm -->
    <section id="ukm">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="gambar/kopi1.jpg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title">KOPI LUWAK</h5>
                                 <p class="card-text">Kopi bubuk alami yang diproses secara higinis</p>
                                 <button class="btn btn-primary" type="submit">Rp: 250.000/pcs</button>
                                 <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="gambar/kopi2.jpeg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title">KOPI BUBUK BAROKAH</h5>
                                 <p class="card-text">Kopi bubuk alami yang diproses secara higinis</p>
                                 <button class="btn btn-primary" type="submit">Rp: 35.000/pcs</button>
                                 <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="gambar/kopi3.jpg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title">KOPI BUBUK BAROKAH</h5>
                                 <p class="card-text">Kopi bubuk alami yang diproses secara higinis</p>
                                 <button class="btn btn-primary" type="submit">Rp: 35.000/pcs</button>
                                 <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

   <!-- footer -->
   <?php require('footer.php') ;?>
      
    <!-- otator script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
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