<?php
require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Daftar Mahasiswa
    </a>
  </nav>

  <div class="container-fluid mt-5 mb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="gambar">
          <img src="img/<?= $mhs['gambar']; ?>" class="ml-5" alt="">
        </div>
      </div>
      <div class="col-md-8">
        <div class="keterangan">
          <h1 class="mb-5 mt-4"><?= $mhs['nama']; ?></h1>
          <h4 class="mb-3"><?= $mhs['nrp']; ?></h4>
          <h4 class="mb-3"><?= $mhs['email']; ?></h4>
          <h4 class="mb-3"><?= $mhs['jurusan']; ?></h4>
          <a href="latihan3.php" class="btn btn-primary mt-5">Kembali</a>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer class="text-white bg-secondary mt-5 fixed-footer">
    <div class="container">
      <div class="row pt-4">
        <div class="col">
          <p>Copyright 2020.</p>
        </div>
      </div>
    </div>
  </footer>
  <script>
    < script src = "https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin = "anonymous" >
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </script>

  <!-- <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" alt=""></li>
    <li><?= $mhs['nrp']; ?></li>
    <li><?= $mhs['nama']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul> -->
</body>

</html>