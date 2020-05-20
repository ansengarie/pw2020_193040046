<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}
require 'functions.php';

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
  <link rel="shortcut icon" href="../assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="../css/Brands.css">
  <link rel="stylesheet" href="../css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="stylesheet" href="../css/Lightbox-Gallery.css">
  <link rel="stylesheet" href="../css/Navigation-with-Search.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="page-top">
    <div class="container">
      <a class="navbar-brand" href="admin.php">
        <img src="../assets/img/logo.png" width="100px" alt="">
      </a>
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php">Produk</a></li>
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
        <a class="btn btn-light action-button" role="button" data-bs-hover-animate="pulse" href="logout.php" style="background-color: rgb(255,0,0);">Logout</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <div class="container-fluid">
          <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <a class="btn btn-primary btn-sm d-sm-inline-block" role="button" href="tambah.php">
              <i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Tambah Data</a>
            <h3 class="text-info d-none d-sm-block" role="presentation" id="timestamp"></h3>
          </div>
          <div class="row">
            <?php if (empty($elektronik)) : ?>
              <div class="col-md-12">
                <h1 class="text-center">Data produk tidak ditemukan!</h3>
              </div>
            <?php endif; ?>
          </div>
          <div class="row">
            <?php foreach ($elektronik as $row) : ?>
              <div class="col-lg-5 col-xl-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="col">
                    <h6 class="text-primary font-weight-bold m-0"><?= $row['seri']; ?></h6>
                  </div>
                  <a class="btn btn-info justify-content-end" href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> &nbsp;
                  <a class="btn btn-danger justify-content-end" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm ('apakah anda yakin?');">Hapus</a>
                </div>
                <div class="card-group shadow mb-4">
                  <div class="card-body" style="max-height: 400px; min-height: 400px">
                    <img class="card-img-top img-fluid max-foto mb-3" src="../assets/img/<?= $row['foto']; ?>" style="max-height: 200px; min-height: 200px;">
                    <p><?= $row['spesifikasi']; ?></p>
                    <p><?= $row['fitur']; ?></p>
                    <p>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../js/bs-animation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="../js/stylish-portfolio.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/chart.min.js"></script>
  <script src="../js/bs-charts.js"></script>
  <script src="../js/themejs"></script>
  <script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function() {
      setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
    });

    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
      $.ajax({
        url: '../ajax/ajax_timestamp.php',
        success: function(data) {
          $('#timestamp').html(data);
        },
      });
    }
  </script>
</body>

</html>