<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href ='admin.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Produk</title>
  <link rel="shortcut icon" href="../assets/img/tambah.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Form Tambah Daftar Produk
    </a>
    <p>
      <a href="admin.php" class="btn btn-primary mt-2">Kembali</a>
    </p>
  </nav>
  <div class="container mt-5">
    <form action="" method="POST" enctype="multipart/form-data" class="ml-5 mt-3">
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Seri :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="seri" class="form-control" autofocus required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Spesifikasi :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="spesifikasi" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Fitur :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="fitur" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Harga :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="harga" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Foto :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="file" name="foto" class="foto" onchange="previewImage()">
            <img src="../assets/img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">

          </div>
          <div class="col-sm-4">
            <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
          </div>
        </div>
      </div>
    </form>
  </div>


  <script src="../js/script.js"></script>
</body>

</html>