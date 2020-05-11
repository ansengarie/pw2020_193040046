<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href ='index.php';
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
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Form Tambah Daftar Mahasiswa
    </a>
    <p>
      <a href="index.php" class="btn btn-primary mt-2">Kembali</a>
    </p>
  </nav>


  <form action="" method="POST" enctype="multipart/form-data" class="ml-5 mt-3">
    <div class="form-group">
      <label>
        Nama :
        <input type="text" name="nama" class="form-control" autofocus required>
      </label>
    </div>
    <div class="form-group">
      <label>
        NRP :
        <input type="text" name="nrp" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Email :
        <input type="text" name="email" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Jurusan :
        <input type="text" name="jurusan" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Gambar :
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
      </label>
      <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
    </div>
    <div class="form-group">
      <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
      <button type="reset" name="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>

  <script src="js/script.js"></script>
</body>

</html>