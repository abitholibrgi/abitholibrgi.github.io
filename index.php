<?php $page='beranda'; require('config.php'); ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemdes Paseseh</title>

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
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
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
   
    
     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    

</head>
<body>
     <!-- Navbar -->
<?php require('navbar.php'); ?>

      <section id="awal">
          <div class="jumbotron">
                <p class="lead1">
                  <span>Selamat</span>
                  <span>datang</span>
                  <span>di</span>
                  <span>website</span> 
                  <span>resmi</span> <br>
                  <span>D</span><span>e</span><span>s</span><span>a</span>
                  <span>P</span><span>a</span><span>s</span><span>e</span><span>s</span><span>e</span><span>h</span> <br>
                  <span>Tanjung</span>
                  <span>Bumi</span>
                </p>      
          </div>
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
            </div>
          </div>
          
    </section>

      <!-- vidio -->
    <section id="vidio">
      <di class="container-fluid">
          <div class="embed-responsive embed-responsive-16by9">
             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ew-p3jMiWVY?autoplay=1&mute=1" allowfullscreen></iframe>
          </div>
      </di>
    </section>

    <!-- datacounterUp -->
    <section id="dataCounter">
      <div class="container">
          <div class="row text-center fixed">
              <div class="col-md-3">
                <i class="fas fa-users" style="font-size:70px; color:white;"></i>
                <h3 class="num text-white pt-1">9550</h3>
                <h5 class=" text-white pt-1">JUMLAH PENDUDUK</h5>
              </div>
              <div class="col-md-3">
                <i class="fas fa-user" style="font-size:70px; color:white;"></i>
                <h3 class="num text-white pt-1">5000</h3>
                <h5 class=" text-white pt-1">LAKI-LAKI</h5>
              </div>
              <div class="col-md-3">
                <i class="fas fa-user" style="font-size:70px; color:white;"></i>
                <h3 class="num text-white pt-1">4550</h3>
                <h5 class=" text-white pt-1">PEREMPUAN</h5>
              </div>
              <div class="col-md-3">
                <i class="fas fa-users" style="font-size:70px; color:white;"></i>
                <h3 class="num text-white pt-1">3651</h3>
                <h5 class=" text-white pt-1">ANGGOTA KELUARGA</h5>
              </div>
          </div>
            
      </div>
    </section> 

    <!-- kartu layanan -->
    <section id="layanan">
      <div class="container">
            <h2 class="page-section-heading text-center text-uppercase mb-0">LAYANAN PUBLIK</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star" style="color:#e3f115; font-size:30px;"></i>
                    <i class="fas fa-star" style="color:#e3f115; font-size:30px;"></i>
                    <i class="fas fa-star" style="color:#e3f115; font-size:30px;"></i>
                   
                  </div>
                    <div class="divider-custom-line"></div>
                </div>
        <div class="row">
          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content">
                  <h2><b>PROFIL</b></h2>
                  <a href="" class="icons"><i class="fas fa-home mt-4" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content">
                  <h2><b>LAYANAN</b></h2>
                  <a href="hlm-publik.php" class="icons"><i class="fas fa-book-open mt-4" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content">
                  <h2><b>ASPIRASI WARGA</b></h2>
                  <a href="hlm-aduan.php" class="icons"><i class="fas fa-users" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content">
                  <h2><b>OBYEK WISATA</b></h2>
                  <a href="hlm-wisata.php" class="icons"><i class="fas fa-hiking mt-4" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content">
                  <h2><b>PENGUMUMAN</b></h2>
                  <a href="" class="icons"><i class="fas fa-bullhorn mt-4" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="col-xl col-md-2">
              <div class="box">
                <div class="content fixed">
                  <h2><b>HALLO DESA</b></h2>
                  <!-- <a href="hlm-umkm.php" class="icons"><i class="fas fa-users" style="font-size:60px;"></i></a><br> -->
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan" class="icons"><i class="fas fa-phone mt-4" style="font-size:120px;"></i></a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>

    <!-- struktur -->
    <section id="lembaga">
        <div class="container-fluid">
          <h2 class="text-center">STRUKTUR </h2><hr class="bg-white">
          <div class="row">
                <div class="col-md-3">
                    <div class="card">
                      <div class="imgBox">
                        <img src="gambar/kades.png" alt="gambar" style="width:230px; height:230;">
                      </div>
                    </div>
                    <div class="contentBx">
                        <h3>KEPALA DESA</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                      <div class="imgBox">
                        <img src="gambar/7.png" alt="gambar" style="width:230px; height:230;">
                      </div>
                    </div>
                    <div class="contentBx">
                       <h3 class="sekretaris">SEKRETARIS</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                      <div class="imgBox">
                        <img src="gambar/12.png" alt="gambar" style="width:230px; height:230;">
                      </div>
                    </div>
                    <div class="contentBx">
                    <h3 class="bendahara">BENDAHARA</h3>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                      <div class="imgBox">
                        <img src="gambar/10.png" alt="gambar" style="width:230px; height:230;">
                      </div>
                    </div>
                    <div class="contentBx">
                      <h3 class="humas">HUMAS</h3>
                    </div>
                </div>
          </div>
        </div>
    </section>

    <!-- BERITA -->
    <section id="bagianberita">
    <h2 class="page-section-heading text-center text-uppercase mb-0">KABAR BERITA </h2> <hr>
        <div class="container">
            <div class="row">
              <div class="col-4">
                    <div class="card" onclick="location.href='hlm-berita.php'">
                        <img src="gambar/batik9.jpg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title ">Kunjungan gubernur ke Toko batik</h5>
                                 <p class="card-text">Disela kunjungan kerjanya ke wilayah sumunep
                                   orang nomer satu di jawa timur itu mengunjungi...
                                 </p>
                                 <a href="#" class="btn btn-outline-info text-dark">Lihat berita</a>
                            </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" onclick="location.href='hlm-berita.php'">
                        <img src="gambar/k2.jpg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title">Gotong royong</h5>
                                 <p class="card-text">Kepala desa Paseseh beserta jajaranya bergotong royong... </p>
                                 <a href="hlm-berita.php" class="btn btn-outline-info text-dark">Lihat berita</a>
                            </div>
                    </div>
                </div>

                
                <div class="col-4">
                    <div class="card" onclick="location.href='hlm-berita.php'">
                        <img src="gambar/k1.jpeg" class="card-img-top" alt="gambar">
                           <div class="card-body">
                                <h5 class="card-title">Program desa paseseh</h5>
                                 <p class="card-text">Ditengah badai pandemi yang begitu intens, namun
                                   tidak menyurutkan mangkranknya program kerja...
                                 </p>
                                 <a href="hlm-berita.php" class="btn btn-outline-info text-dark">lihat berita</a>
                           </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- GALERI -->
    <section id="galeri">
        <h2 class="text-center mt-5"><b> Galeri Desa </b></h2> <hr>
        <div class="container-fluid">
          <div class="row">
              <div class="column">
                <img class="demo cursor" src="gambar/k4.jpg" style="width:440px; height:300px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                <img class="demo cursor" src="gambar/k5.gif" style="width:440px; height:300px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                <img class="demo cursor" src="gambar/k3.JPG" style="width:440px; height:312px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img class="demo cursor" src="gambar/k2.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                <img class="demo cursor" src="gambar/k1.jpeg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img class="demo cursor" src="gambar/k6.jpg"  style="width:440px; height:300px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                <img class="demo cursor" src="gambar/k8.jpg" style="width:440px; height:300px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                <img class="demo cursor" src="gambar/k.jpg" style="width:440px; height:312px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
              </div>
          </div>
          <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()"> Close</span>
              <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 8</div>
                    <img src="gambar/k4.jpg" style="width:100%; height:600px" >
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 8</div>
                    <img src="gambar/k5.gif" style="width:100%; height:600px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 8</div>
                    <img src="gambar/k3.JPG" style="width:100%; height:600px">
                </div>
                
                <div class="mySlides">
                   <div class="numbertext">4 / 8</div>
                   <img src="gambar/k2.jpg" style="width:100%; height:900px">
                </div>

                <div class="mySlides">
                   <div class="numbertext">5 / 8</div>
                   <img src="gambar/k1.jpeg" style="width:100%; height:600px">
                </div>

                <div class="mySlides">
                   <div class="numbertext">6 / 8</div>
                   <img src="gambar/k6.jpg" style="width:100%; height:600px">
                </div>

                <div class="mySlides">
                   <div class="numbertext">7 / 8</div>
                   <img src="gambar/k8.jpg" style="width:100%; height:600px">
                </div>

                <div class="mySlides">
                   <div class="numbertext">8 / 8</div>
                   <img src="gambar/k.jpg" style="width:100%; height:600px">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                  <p id="caption"></p>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- covid -->
    <section id="covid">
      <div class="container-fluid bg-info mt-2">
        <div class="row">
          <div class="col-md-8">
              <h3 class="text-uppercase mt-4 pt-5 ml-5">kampung tangguh <span> covid-19 </span></h3>
              <p class="mt-4 pt-3  text-white pb-4 ml-5">Dimulai dari diri sendiri, Mari kita bersama-sama 
                memberantas mata rantai <br> Covid-19 sesuai arahan pemerintah <br>
                #dariDesaUntukIndonesia #bersatuKitaBisa #cepatPulihIndonesia
              </p>
              <a href="http://" class=" btn btn-outline-warning ml-5">Kampung Siaga Covid</a>
          </div>
          <div class="col-md-4 bg-warning">
            <img src="gambar/covid3.png" alt="gambar" style="width:300px; height:500px;">
          </div>
        </div>
      </div>
    </section>
    <!-- pendapatan -->

    <section id="pendapatan">
        <div class="container">
        <h1 class="pt-4">Pendapatan Desa</h1><hr class="bg-danger" style="20px">
          <div class="row">
            <div class="col-md-8">
               <h4 class="mt-2">Pendapatan Asli Desa</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width:5%;" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100">10%</div>
                </div>
                <h4 class="mt-2">Alokasi Dana Desa</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9%</div>
                </div>
                <h4 class="mt-2">Dana Desa</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">61%</div>
                </div>
                <h4 class="mt-2">Bagi hasil Pajak Daerah</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                </div>
                <h4 class="mt-2">Bantuan Keuangan Kabupaten</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-success text-white" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">6%</div>
                </div>
                <h4 class="mt-2">Bantuan Langsung Keuangan Provinsi</h4>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9%</div>
                </div>
            </div>
          </div>
        </div>
    </section>

   
    <!-- map -->
    <section id="map">
      <div class="container-fluid">
        <h1 class="text-center mt-5 pt-4">PETA DESA PASESEH</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11203.30033359394!2d113.07934369358544!3d-6.8948116605328575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd83ed0e550c699%3A0xe99afe89470dbabe!2sPaseseh%2C%20Tanjungbumi%2C%20Bangkalan%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1607328788080!5m2!1sen!2sid" 
          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>

    <!-- footer -->
    <?php require('footer.php') ;?>

    <script type="text/javascript">
      $(".num").counterUp({
        delay:10,
        time:10000
      });
     </script>
    
    <!-- <script src="vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".vanila"), {
        max: 25,
        speed: 400
      }); -->
      
      <!-- //It also supports NodeList
      VanillaTilt.init(document.querySelectorAll(".vanila"));
    </script>
  -->

      <?php 
      
         $sql = "SELECT * FROM dataPenduduk";
         $query = mysqli_query($dbconn, $sql); 

         $i = array();
            
         while($rakyat = mysqli_fetch_array($query)){
             $i[] = array(
               'nama' => $rakyat['nama'], 
               'jumlah' => $rakyat['jumlah']
             );
         }                    
        
        ?>
        <script type="text/javascript">
        google.charts.load('current');   // Don't need to specify chart libraries!
          google.charts.setOnLoadCallback(drawVisualization);

          function drawVisualization() {
            var wrapper = new google.visualization.ChartWrapper({
              chartType: 'ColumnChart',
              // dataTable: [['', 'Penduduk', 'Laki-laki', 'Perempuan', 'Kepala Keluarga', 'Anggota Keluarga'],['', 13.110, 6.700, 6.410, 3.600, 9.200]],
              dataTable: [['', '<?php echo $i[0]['nama'] ?>', '<?php echo $i[1]['nama'] ?>', '<?php echo $i[2]['nama'] ?>', '<?php echo $i[3]['nama'] ?>', '<?php echo $i[4]['nama'] ?>'],
                          ['', <?php echo $i[0]['jumlah'] ?>, <?php echo $i[1]['jumlah'] ?>,<?php echo $i[2]['jumlah'] ?>, <?php echo $i[3]['jumlah'] ?>, <?php echo $i[4]['jumlah'] ?>]],
              options: {'title': 'DATA PENDUDUK DESA PASESEH'},
              containerId: 'grafik'
            });
            wrapper.draw();
          }
   </script>

   <script>
     // punya text scrol
    $(document).ready(function(){       
      var scroll_pos = 0;
      $(document).scroll(function() { 
          scroll_pos = $(this).scrollTop();
          if(scroll_pos > 120) {
              $('.nav-item').css('color:white;');
          } else {
              $('.nav-item').css('color:white;');
          }
      });
    });
   </script>
   <script>
            $(".angka").counterUp();
    </script>

      <script>
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }

      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }

      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>
    

     
    <!-- otator script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Vendor JS Files -->
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="proyek.js"></script>
    <script src="/path/to/noframework.waypoints.min.js"></script>



    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    

    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
      
    
</body>
</html>