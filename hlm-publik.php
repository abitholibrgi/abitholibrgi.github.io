<?php  $page='layanan'; require('config.php') ; ?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Layana Publik</title>
    
    <!-- link css -->
    <style>
      <?php include 'style.css'; ?>
    </style>
    <!-- otator -->
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
    
  </head>
  <body>
   <!-- Navbar -->
   <?php require('navbar.php') ; ?>
   <section>
              <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
    </section>

   <!-- JENIS JENIS ADUAN -->
   <section id="jenis">
       <h1 class="text-center">LAYANAN PUBLIK PEMDES PASESEH</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="content text-center">
                        <a href="hlm-aduan.php" class="icons"><i class="fas fa-users" style="font-size:60px;"></i></a><br><br>
                            <h3 class="text">ASPIRASI WARGA</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="content text-center">
                        <a href="hlm-mobil-siaga.php" class="icons"><i class="fas fa-car-side" style="font-size:60px;"></i></a><br><br>
                            <h3 class="text">MOBIL SIAGA RAKYAT</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="content text-center">
                        <a href="form-surat.php" class="icons"><i class="fas fa-envelope-open" style="font-size:60px;"></i></a><br><br>
                            <h3 class="text">SURAT ONLINE</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                        <div class="content">
                            <img src="gambar/kades.png" alt="gambar"> 
                        </div>
                </div>

                <div class="col-md-8">
                    <div class="content">
                         <h4 class="text-center mt-4">Untuk menciptakan kesejahteraan masyarakat maka kami menciptakan layanan publik 
                            yang dapat diakses oleh seluruh masyarakat desa Paseseh.
                        </h4><br>
                        <h2 class="nama"> M. ROZZAK SE. Mpdi</h2><hr><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- awalan -->
    <section id="awalan">
      <div class="container">
      <div id="contentData"></div>
      </div>
    </section>
    
   <!-- footer -->
    <?php require('footer.php') ;?>
      
    <!-- otator script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

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