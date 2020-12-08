<?php
$page='berita';
 require('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KABAR PASESEH</title>
    <meta name="description" content="Digitalisasi Desa Moderen">

    <!-- link css -->
    <style>
      <?php include 'style.css' ; ?>
    </style>
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <!-- icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- Navbar -->
    <?php require('navbar.php'); ?>
    <section>
              <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
    </section>
    <!-- foto kegiatan -->
    <section id="hlmBerita">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase mb-0"><span><i class="far fa-newspaper" style="color:green;"></i></span>
            <span>K</span>
            <span>A</span>
            <span>B</span>
            <span>A</span>
            <span>R</span> 
            PASESEH</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-globe" style="color:green; font-size:40px;"></i>
                  </div>
                    <div class="divider-custom-line"></div>
                </div>
        </div>
            <div class="row">
                <div class="col-md-10 pl-5">
                            <?php 
                                
                            $kategori = (isset($_GET['kategori'])) ? ' WHERE tipeBerita = "' . $_GET['kategori'] . '"' : '';
                            $sql = 'SELECT * FROM berita ' . $kategori;
                            $query = mysqli_query($dbconn, $sql);
                            
                            $i = 1;
                
                            while($berita = mysqli_fetch_array($query)){
                            
                            ?>
                                
                            <p class="mt-4"><?php echo $berita['tanggal']; ?></p>
                            <h2  class=""><?php echo $berita['judulBerita']; ?></h2> <br>
                            <h2><?php echo "<td><a href='gambar/".$berita['foto']."' target='_blank'><img src='gambar/".$berita['foto']."' style='width:600px; height:400px; text-align:center;'></a></td>"; ?> </h2> 
                            <div class="content">
                                <h5 class="text-left">
                                <?php echo nl2br($berita['isi']); ?>
                                </h5>
                                <h3> BAGIKAN:
                                    <a href="http://www.facebook.com/sharer/sharer.php?u="><i class="fab fa-facebook" style="color:#3b5998; font-size:30px;"></i></a>
                                    <a href="http://"><i class="fab fa-twitter" style="color:#00d3d1; font-size:30px;"></i></a>
                                    <a href="http://"><i class="fab fa-instagram" style="color:red; font-size:30px;"></i></a>
                                </h3>   <br> <br>
                                
                            </div>
                            <?php } ?>

                </div>
                <div class="col-md-2 ml-auto ">
                    <h5 class="kategori">Kategori Berita</h5><hr>
                        <ul class="nav flex-column bg-danger">
                            <li class="nav-item">
                                    <a class="nav-link text-white" href="hlm-berita.php?kategori=keagamaan">Keagamaan</a>
                                    <hr class="bg-secondary">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="hlm-berita.php?kategori=sosial">Sosial</a>
                                    <hr class="bg-secondary">
                                 </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="hlm-berita.php?kategori=budaya">Budaya</a>
                                    <hr class="bg-secondary">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="hlm-berita.php?kategori=pendidikan">Pendidikan</a>
                                     <hr class="bg-secondary">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="hlm-berita.php?kategori=motivasi">Motivasi</a>
                                    <hr class="bg-secondary">
                            </li>                   
                        </ul>   
                        <ul class="nav flex-column mt-5">
                            <li class="nav-item">
                                <a class="navbar-brand " href="#"> <img src="gambar/kades.png" alt="gambar" style="width:150px; height:200px;"></a>
                            </li>                             
                        </ul>
                             <h5> <b>KEPALA DESA PASESEH</b></h5><hr class="bg-secondary">
                             <p>Jln: tanjung bumi No.4 rw 05 rt 04 desa Paseseh Tanjung Bumi Bangkalan Jawa timur</p>
                </div>
            </div>
    </section>
    <section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    
    <!-- otator script -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="proyek.js"></script>
    <script src="/path/to/noframework.waypoints.min.js"></script>

    
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