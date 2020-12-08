<?php 
$page='layanan';
require('config.php');

?>
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

    <title>list aduan masyarakat</title>
  </head>
  <body>
  <!-- navbar -->
  <?php require('navbar.php') ;?>
    <!-- list mobil siaga -->
    <section id="list">
        <div class="container">
            <h1>LIST ADUAN MASYARAKAT PEMDES PASESEH</h1> <hr> <br>
            <h5><a href="form-aduan.php">Tambah Aduan[+]</a></h5>
            <table class="table table-hover" border=1 >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Laporan</th>
                        <th>Jenis Laporan</th>
                        <th>Lokasi Kejadian</th>
                        <th>Tanggal Kejadian</th>
                        <th>Kategori Laporan</th>
                        <th>foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        $sql = "SELECT * FROM suaraRakyat";
                        $query = mysqli_query($dbconn, $sql);
                        
                        $i = 1;
            
                        while($rakyat = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$i."</td>";
                            echo "<td>".$rakyat['namaLaporan']."</td>";
                            echo "<td>".$rakyat['jenisLaporan']."</td>";
                            echo "<td>".$rakyat['lokasiKejadian']."</td>";
                            echo "<td>".$rakyat['tanggalKejadian']."</td>";
                            echo "<td>".$rakyat['kategoriLaporan']."</td>";
                            // echo "<td>".$rakyat['foto']."</td>";
                            echo "<td><a href='gambar/".$rakyat['foto']."' target='_blank'><img src='gambar/".$rakyat['foto']."' style='width:100px; height:auto;'></a></td>";

                            echo "</tr>";
                            $i++;
                        }
                        
                        ?>
                </tbody>
            </table>
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