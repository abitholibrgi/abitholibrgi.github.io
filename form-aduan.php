<?php $page='layanan'; require('config.php'); ?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Form Pengaduan Masyarakat</title>
    
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
    <!-- form daftar mobil -->
    <section id="form">
        <div class="container">
            <h1 >FORM PENGADUAN MASYARAKAT PASESEH</h1> <hr> <br>

            <form id="addButton" action="proses-simpan-aduan.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="namaLaporan"> Nama Laporan :</label>
                     <textarea class="form-control" id="namaLaporan" name="namaLaporan" rows="3"></textarea>
                </div>
                <div class="form-group">
                     <label for="jenisLaporan">Jenis Laporan:</label>
                        <select class="form-control" id="jenisLaporan" name="jenisLaporan">
                            <option>Pilih..</option>
                            <option>Corona Virus</option>
                            <option>Agama</option>
                            <option>Ekonomi dan Keuangan</option>
                            <option>Kesehatan</option>
                            <option>Ketentraman</option>
                            <option>Ketertiban Umum</option>
                            <option>Perlindungan Masyarakat</option>
                            <option>Lingkungan</option>
                            <option>Kehutanan</option>
                            <option>Pendidikan dan Kebudayaan</option>
                            <option>Pertanian dan Peternakan</option>
                            <option>Bansos</option>
                            <option>Topik Lain</option>
                        </select>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                         <label for="tanggalKejadian">Tanggal Kejadian:</label>
                         <input type="date" class="form-control" id="tanggalKejadian"  name="tanggalKejadian" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                         <label for="lokasiKejadian">Lokasi Kejadian:</label>
                         <input type="text" class="form-control" id="lokasiKejadian"  name="lokasiKejadian" required>
                    </div>
                </div>
                <div class="form-group">
                     <label for="kategoriLaporan">Kategori Laporan:</label>
                        <select class="form-control" id="kategoriLaporan" name="kategoriLaporan">
                            <option>Pilih..</option>
                            <option>Anonim</option>
                            <option>Rahasia</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="foto">Example file input</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                
                <button class="btn btn-primary text-center" type="submit" id="lapor" name="lapor">LAPOR!</button>
            </form>
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