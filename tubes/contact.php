<?php
require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik");

if (isset($_POST['cari'])) {
  $elektronik = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Jee Elektronik</title>
  <link rel="shortcut icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="css/Brands.css">
  <link rel="stylesheet" href="css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="stylesheet" href="css/Lightbox-Gallery.css">
  <link rel="stylesheet" href="css/Navigation-with-Search.css">
  <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    html {
      scroll-behavior: smooth;
    }

    .breadcrumb {
      margin-bottom: 0;
      background-color: white;
    }
  </style>
</head>

<body id="page-top">
  <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="page-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logo.png" width="100px" alt="">
      </a>
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li class="nav-item" role="presentation"><a class="nav-link" href="index.php#Produk">Produk</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">About</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">Contact Us</a></li>
        </ul>
        <form action="" method="POST" class="form-inline mr-auto" target="_self">
          <div class="form-group">
            <label for="search-field">
              <i class="fa fa-search"></i>
            </label>
            <input class="form-control search-field" type="text" id="search-field" name="keyword" autocomplete="off" placeholder="Masukkan keyword ...">
            <button type="submit" name="cari" class="tombol-cari">Cari!</button>
          </div>
        </form>
        <!-- <form action="" method="POST" class="form-inline mr-auto">
          <div class="form-group">
            <label for="search-field">
              <i class="fa fa-search"></i>
            </label>
            <input type=" text" class="form-control search-field keyword" name="keyword" id="search-field" placeholder="Masukkan keyword pencarian" autofocus autocomplete="off">
            <button type="submit" name="cari" class="tombol-cari">Cari!</button>
          </div>
        </form> -->
        <a class="btn btn-light action-button" role="button" data-bs-hover-animate="pulse" href="php/login.php" style="background-color: rgb(255,0,0);">Login</a>
      </div>
    </div>
  </nav>

  <div class="photo-gallery">
    <div class="container">
      <nav aria-label="breadcrumb" class="bg-light">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ul>
      </nav>
      <div class="intro">
        <h1 class="text-center mb-5">Contact Us</h1>
      </div>

      <form method="post">
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">Send </button></div>
      </form>
    </div>
  </div>
  <div class="footer-dark mt-3" style="background-color: rgb(150,0,0);">
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
              <i class="icon ion-social-whatsapp"></i>
            </a>
            <a href="#"><i class="icon ion-social-instagram"></i>
            </a>
          </div>
        </div>
        <p class="copyright">Jee Elektronik © 2020</p>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bs-animation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="js/stylish-portfolio.js"></script>
  <script src="js/script.js"></script>
</body>

</html>