<?php
require 'php/functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM elektronik WHERE id = $id");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Jee Elektronik</title>
  <link rel="shortcut icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="css/Brands.css">
  <link rel="stylesheet" href="css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="stylesheet" href="css/Lightbox-Gallery.css">
  <link rel="stylesheet" href="css/Navigation-with-Search.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="page-top">
    <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="100px" alt=""></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li class="nav-item" role="presentation"><a class="nav-link" href="#Produk">Produk</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
        <form action="" method="POST" class="form-inline mr-auto" target="_self">
          <div class="form-group">
            <label for="search-field">
              <i class="fa fa-search"></i>
            </label>
            <input class="form-control search-field" type="text" id="search-field" name="keyword">
            <button type="submit" name="cari" class="tombol-cari">Cari!</button>
          </div>
        </form>
        <a class="btn btn-light action-button" role="button" data-bs-hover-animate="pulse" href="php/login.php" style="background-color: rgb(255,0,0);">Login</a>
      </div>
    </div>
  </nav>
  <div>
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <img src="assets/img/<?= $row['foto']; ?>" alt="" class="img-fluid mx-auto d-block">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="mb-5"><?= $row['seri']; ?></h1>
          <h3><?= $row['spesifikasi']; ?></h3>
          <h3><?= $row['fitur']; ?></h3>
          <h3>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></h3>
          <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-md-4">
      <div class="gambar">
        <img src="assets/img/<?= $row['foto']; ?>" alt="">
      </div>
    </div>
    <div class="col-md-8">
      <div class="keterangan">
        <h1 class="mb-5 mt-4"><?= $row['seri']; ?></h1>
        <h4 class="mb-3"><?= $row['spesifikasi']; ?></h4>
        <h4 class="mb-3"><?= $row['fitur']; ?></h4>
        <h4 class="mb-3">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></h4>
        <a href="../index.php" class="btn btn-primary mt-5">Kembali</a>
      </div>
    </div>
  </div> -->
  <div class="footer-dark mt-5" style="background-color: rgb(150,0,0);">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col item social">
            <a href="#">
              <i class="icon ion-social-facebook"></i>
            </a>
            <a href="#">
              <i class="icon ion-social-twitter"></i>
            </a>
            <a href="#">
              <i class="icon ion-social-snapchat"></i>
            </a>
            <a href="#"><i class="icon ion-social-instagram"></i>
            </a>
          </div>
        </div>
        <p class="copyright">Jee Elektronik © 2020</p>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bs-animation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="js/stylish-portfolio.js"></script>
  <script src="js/script.js"></script>
</body>

</html>