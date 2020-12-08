<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      <?php include 'style.css' ; ?>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
        <a class="navbar-brand ml-5" href="#"> <img src="gambar/log.png" alt="gambar"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         Menu <i class="fas fa-bars ml-1"></i>
        </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto mr-5">
                        <li class="<?php if($page=='beranda'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="index.php">BERANDA</a></li>
                        <li class="<?php if($page=='profile'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="profil.php">PROFILE</a></li>
                        <li class="<?php if($page=='berita'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="hlm-berita.php">BERITA</a></li>
                        <li class="<?php if($page=='layanan'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="hlm-publik.php">LAYANAN</a></li>
                        <li class="<?php if($page=='wisata'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="hlm-wisata.php">WISATA</a></li>
                        <li class="<?php if($page=='struktur'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="hlm-struktur.php">STRUKTUR</a></li>
                        <li class="<?php if($page=='card'){echo 'aktif';} ?>"><a class="js-scroll-trigger" href="card.php">CARD</a></li>
                    </ul>
                </div>
       </nav>

   


</body>
</html>
     
