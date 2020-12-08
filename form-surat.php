<?php $page='layanan'; require('config.php'); ?>
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
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- link font awesome -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> form surat online</title>
  </head>
  <body>
     <!-- Navbar -->
    <?php require('navbar.php') ; ?>
    <!-- form daftar mobil -->
    <section id="form">
        <div class="container">
            <h1>FORM SURAT ONLINE</h1> <hr> <br>

            <form action="proses-simpan-surat.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nik">NIK:</label>
                            <input type="number" class="form-control" name="nik" required>
                    </div>
                    <div class="col-md-6 mb-3">
                         <label for="nama">Nama :</label>
                         <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                     <textarea class="form-control"  name="alamat" ></textarea>
                 </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                         <label for="jenisSurat"> Jenis Surat :</label>
                         <select type="text" class="form-control" name="jenisSurat">
                            <option>Pilih..</option>
                            <option>Surat Keterangan Usaha</option>
                            <option>Surat Keterangan Miskin</option>
                            <option>Surat Keterangan Kelahiran</option>
                            <option>Surat Keterangan Kematian</option>
                            <option>Surat Keterangan Harga Tanah</option>
                            <option>Surat Keterangan Penghasilan</option>
                            <option>Surat Keterangan Beda Nama</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan :</label>
                     <textarea class="form-control"  name="pesan" rows="3"></textarea>
                 </div>
                <button class="btn btn-primary text-center" type="submit" id="daftar" name="daftar">Kirim Permohonan</button>
                <a href="hlm-publik.php" class="btn btn-secondary bg-primary"> Kembali</a>
            </form>
        </div>
    </section>

    <!-- list surat -->
    <section id="list-surat">
        <div class="container">
            <div class="content">
            <a href="list-surat.php" class="btn btn-secondary bg-danger">Lihat Surat Masuk</a>
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