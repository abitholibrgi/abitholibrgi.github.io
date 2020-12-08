<?php  $page='profile'; require('config.php') ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profil Paseseh</title>

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
    <link rel="stylesheet" href="bower_components/Morphext/dist/morphext.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
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

    

</head>
<body>
     <!-- Navbar -->
    <?php require('navbar.php'); ?>
    <section>
              <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=6287849494509&text=Assalaamu%27alaikum,%20Ijin%20Melaporkan">
                <i class='fab fa-whatsapp-square' style='font-size:80px;'></i>
              </a>
    </section>
    <section id="profilDesa" >
        <div class="jumbotron">
                <h1 class="text-center">PASESEH</h1>
                       <p class="lead text-center">Penamaan Desa Paseseh sendiri, menurut cerita para sesepuh yang
                                                masih hidup sampai saat ini diambil dari salah satu legenda Desa Paseseh.
                                    Konon katanya pada jaman dahulu kala terjadi perselisihan antara orang
                                    kawasan barat dan orang kawasan timur, perselisihan itu terjadi karena
                                    perebutan kekuasaan. Sampai suatu saat, terjadilah puncak perselisihan 
                                    tersebut di pseser tase’(Pesisir Pantai; Indonesia) yang ditandai dengan
                                    terbunuhnya pemimimpin kawasan barat. Berawal dari itulah, desa ini pada
                                    awalnya dikenal dengan Pseser yang merupakan terpat terjadinya
                                    pertumpahan darah antara orang kawasan barat dengan orang kawasan
                                    timur. Namun seiring dengan berjalanya waktu, pada akhirnya sebutan
                                    desa ini berubah menjadi Paseseh. 
                        </p>
         </div>
    </section>

    <!-- visi misi -->
    <section id="visi">
        <div class="container">
            <h1>VISI DAN MISI</h1>
            <div class="row">
            <div class="col-md-9">
                    <h3 class="text-center">Visi</h3>
                    <h6 class="pl-5 ml-5"> Jalan Peruabahan Menuju Desa Paseseh Yang sejahtera, Transparan Amanah Dan Berkemajuan </h6>
                     <br>
                     <br>
                     <h3 class="text-center">Misi</h3>
                     <h6 class="pl-5 ml-5">1. Menjalankan roda pemerintahan yang dinamis, jujur <span></span>  dan tidak diskriminatif</h6>
                     <h6 class="pl-5 ml-5">2. Meningkatkan kualitas sarana-perasarana masyarakat </h6>
                     <h6 class="pl-5 ml-5">3. Meningkatkan ketahanan pangan dan keamanan masyarakat</h6>
                </div>
                <div class="col-md-3">
                    <img src="gambar/kades1.png" alt="gambar" srcset="">
                </div>
                
            </div>
        </div>
    </section>



    <section id="data">
      <div class="container text-center">
            <div class="card">
              <div class="vanila">
                  <h5 class="mt-4">
                      GRAFIK DATA PENDUDUK DESA PASESEH 2020
                  </h5>
                  <div id="grafik" style="background:transparent"></div>
              </div>
            </div>
      </div>
    </section>

    <!-- belanja desa -->
    <section id="detail-pendapatan">
      <div class="container-fluid">
          <h1 class="text-center">Detail Pendapatan Desa</h1>
          <div class="row">
              <div class="col-md-5 ">
                   <div class="row">
                      <div class="col-xl">
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
              <div class="col-md-2">
                  <div class="garis-vertical"></div>
              </div>
              <div class="col-md-5">
                  <div class="row">
                    <div class="col-xl">
                      <h4 class="pt-1"><i class='fas fa-caret-right' style='font-size:24px'></i>Pendapatan Asli Desa</h4>
                        <h5 class="pl-2"> Rp 350.000.000</h5>
                        <h4 class="pt-1"><i class='fas fa-caret-right' style='font-size:24px'></i>Alokasi Dana Desa</h4>
                        <h5 class="pl-2"> Rp 315.000.000</h5>
                        <h4 class="pt-1"><i class='fas fa-caret-right' style='font-size:24px'></i>Dana Desa</h4>
                        <h5 class="pl-2"> Rp 2.135.000.000</h5>
                        <h4 class="tt-1" ><i class='fas fa-caret-right' style='font-size:24px'></i>Bagi hasil Pajak Daerah</h4>
                        <h5 class="pl-2"> Rp 350.000.000</h5>
                        <h4 class="pt-1"><i class='fas fa-caret-right' style='font-size:24px'></i>Bantuan Keuangan Kabupaten</h4>
                        <h5 class="pl-2"> Rp 210.000.000</h5>
                        <h4 class="pt-1"><i class='fas fa-caret-right' style='font-size:24px'></i>Bantuan Langsung Keuangan Provinsi</h4>
                        <h5 class="pl-2"> Rp 315.000.000</h5>
                    </div>
                  </div>
              </div>
          </div>
          <h4 class="text-muted text-center">Total Pendapatan</h4>
          <h1 class="text-center mt-3">3.500.000.000</h1>
      </div>
    </section>
    <section id="belanja">
        <div class="container-fluid">
              <h1 class="text-center">BELANJA DESA</h1>
              <div class="row">
                  <div class="col-md-9">
                    <details> 
                        <summary>1. Penyelenggaraan pemerintahan desa -Rp. 762.291.554</summary>
                            <ul>
                                <li> Penyelenggaraan Belanja Penghasilan Tetap,
                                    Tunjangan dan Operasional Pemerintahan Desa    – Rp. 701.889.000 </li>
                                <li> Sarana dan Prasarana Pemerintahan Desa – Rp. 3.500.000 </li>
                                <li> Administrasi Kependudukan, Pencatatan Sipil, 
                                <li> Statistik dan Kearsipan – Rp. 14.500.000 </li>
                                <li> Tata Praja Pemerintahan, Perencanaan,
                                    Keuangan dan Pelaporan – Rp. 27.000.000 </li>
                                <li> Pertanahan – Rp. 15.402.554 </li>
                            </ul>
                     </details>
                     <details> 
                        <summary>2. Pelaksanaan Pembangunan-Rp. 1.956.431.800</summary>
                              <ul>
                                  <li> Pendidikan – Rp. 18.480.000 </li>
                                  <li>Kesehatan – Rp. 435.147.200 </li>
                                  <li>Pekerjaan Umum dan Penataan Ruang – Rp. 1.217.204.600 </li>
                                  <li>Kawasan Permukiman – Rp. 60.000.000 </li>
                                  <li>Kehutanan dan Lingkungan Hidup – Rp. 13.000.000 </li>
                                  <li>Perhubungan, Komunikasi dan Informatika – Rp. 51.100.000 </li>
                                  <li>Pariwisata – Rp. 161.500.000</li>
                              </ul>
                     </details>
                     <details> 
                        <summary>3. Pembinaan Masyarakat Desa -Rp. 96.500.000</summary>
                            <ul>
                                <li> Ketenteraman, Ketertiban Umum,
                                        dan Pelindungan Masyarakat – Rp. 15.000.000 </li>
                                    <li> Kebudayaan dan Keagamaan – Rp. 55.000.000 </li>
                                    <li> Kepemudaan dan Olah Raga – Rp. 8.000.000 </li>
                                    <li> Kelembagaan Masyarakat – Rp. 18.500.000</li>
                            </ul>
                     </details>
                     <details> 
                        <summary>4. Pemberdayaan Masyarkat Desa -Rp. 76. 052.200</summary>
                              <ul>
                                  <li> Pertanian dan Peternakan – Rp. 63.552.200 </li>
                                  <li>Peningkatan Kapasitas Aparatur Desa – Rp. 12.500.000</li>
                              </ul>
                     </details>
                     <details> 
                        <summary>5. Penanggulangan Bencana dan Keadaan Darurat -Rp.20.000.000 </summary>
                                <ul>
                                    <li> Penanggulangan Bencana  – Rp. 20.000.000 </li>
                                </ul>
                     </details>
                  </div>
                  <div class="col-md-3"></div>
              </div>
        </div>
    </section>

    <!-- footer -->
   <?php require('footer.php') ;?>
    <script>
    // jQuery counterUp
      $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
      });
    </script>
    <!-- <script src="vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".vanila"), {
        max: 25,
        speed: 400
      });
      
      //It also supports NodeList
      VanillaTilt.init(document.querySelectorAll(".vanila")); -->
    
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
    </script>
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

    

     
    <!-- otator script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    
    
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