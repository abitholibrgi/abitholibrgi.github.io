<?php

require('config.php');

    if( !isset($_GET['id']) ){
        // kalau tidak ada id di query string
        header('Location: edit-aduan.php');
    }
    //ambil id dari query string
    $id = $_GET['id'];

    // $sql = "SELECT NIK,Nama,alamat, year(CURRENT_DATE())-year(tanggalLahir) AS usia, jenisKelamin, agama FROM dataKtps LIMIT 7";
    $sql = "SELECT * FROM suaraRakyat WHERE id=$id" ;
    // echo $sql; 
    // return false;
    $query = mysqli_query($dbconn, $sql);
    $rakyat = mysqli_fetch_assoc($query);





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

    <title> Form Pengaduan Masyarakat</title>
  </head>
  <body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fix-top">
        <a class="navbar-brand ml-4" href="#"> <img src="gambar/logodes.png" alt="gambar" style="width:100px; height:100px;"></a>
        <a class="navbar-brand" href="#">Pemdes Paseseh</a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <div class="icons ml-4">
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="index.php" role="button">BERANDA</a>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="#" role="button">PROFIL</a>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="hlm-berita.php" role="button">BERITA</a>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="hlm-publik.php" role="button">LAYANAN</a>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="hlm-umkm.php" role="button">PRODUK DESA</a>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="hlm-wisata.php" role="button">WISATA DESA</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>
       </nav>
    <!-- form daftar mobil -->
    <section id="form">
        <div class="container">
            <h1>FORM PENGADUAN MASYARAKAT ALANG-ALANG</h1> <hr> <br>

            <form action="proses-edit-aduan.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-12">
                         <input type="hidden" class="form-control" name="id" value="<?php echo $rakyat['id'] ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="namaLaporan"> Nama Laporan :</label>
                    <input type="text" class="form-control"  name="namaLaporan" value="<?php echo $rakyat['namaLaporan'] ?>" rows="3" required>
                </div>
                <div class="form-group">
                     <label for="jenisLaporan">Jenis Laporan:</label>
                     <?php $jL = $rakyat['jenisLaporan']; ?>
                        <select class="form-control"  name="jenisLaporan" value="<?php echo $rakyat['jenisLaporan'] ?>">
                            <option <?php echo ($jL == 'Corona Virus') ? "selected": "" ?> >Corona Virus</option>
                            <option <?php echo ($jL == 'Agama') ? "selected": "" ?> >Agama</option>
                            <option <?php echo ($jL == 'Ekonomi dan Keuangan') ? "selected": "" ?> >Ekonomi dan Keuangan</option>
                            <option <?php echo ($jL == 'Kesehatan') ? "selected": "" ?> >Kesehatan</option>
                            <option <?php echo ($jL == 'Ketentraman') ? "selected": "" ?> >Ketentraman</option>
                            <option <?php echo ($jL == 'Ketertiban Umum') ? "selected": "" ?> >Ketertiban Umum</option>
                            <option <?php echo ($jL == 'Perlindungan Masyarakat') ? "selected": "" ?> >Perlindungan Masyarakat</option>
                            <option <?php echo ($jL == 'Lingkungan') ? "selected": "" ?> >Lingkungan</option>
                            <option <?php echo ($jL == 'Kehutanan') ? "selected": "" ?> >Kehutanan</option>
                            <option <?php echo ($jL == 'Pendidikan dan Kebudayaan') ? "selected": "" ?> >Pendidikan dan Kebudayaan</option>
                            <option <?php echo ($jL == 'Pertanian dan Peternakan') ? "selected": "" ?> >Pertanian dan Peternakan</option>
                            <option <?php echo ($jL == 'Bansos') ? "selected": "" ?> >Bansos</option>
                            <option <?php echo ($jL == 'Topik Lain') ? "selected": "" ?> >Topik Lain</option>
                        </select>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                         <label for="tanggalKejadian">Tanggal Kejadian:</label>
                         <input type="date" class="form-control" name="tanggalKejadian" value="<?php echo $rakyat['tanggalKejadian'] ?>"  required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                         <label for="lokasiKejadian">Lokasi Kejadian:</label>
                         <input type="text" class="form-control"  name="lokasiKejadian" value="<?php echo $rakyat['lokasiKejadian'] ?>" required>
                    </div>
                </div>
                <div class="form-group">
                     <label for="kategoriLaporan">Kategori Laporan:</label>
                     <?php $kL = $rakyat['kategoriLaporan']; ?>
                        <select class="form-control" value="<?php echo $rakyat['kategoriLaporan'] ?>" name="kategoriLaporan">
                            <option <?php echo ($jL == 'Anonim') ? "selected": "" ?>>Anonim</option>
                            <option <?php echo ($jL == 'Rahasia') ? "selected": "" ?>>Rahasia</option>
                        </select>
                </div>
                
                <button class="btn btn-primary text-center" type="submit" id="simpan" name="simpan">SIMPAN</button>
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