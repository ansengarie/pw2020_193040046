<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}
require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

$id = $_GET['id'];

$row = query("SELECT * FROM elektronik WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Produk</title>
  <link rel="shortcut icon" href="../assets/img/update.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Form Ubah Data Produk
    </a>
    <p>
      <a href="admin.php" class="btn btn-primary mt-2">Kembali</a>
    </p>
  </nav>

  <div class="container mt-5">
    <form action="" method="POST" enctype="multipart/form-data" class="ml-5 mt-3">
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label>
              Id :
            </label>
          </div>
          <div class="col">
            <input type="hidden" name="id" class="form-control" value="<?= $row['id']; ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>
              Seri :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="seri" class="form-control" autofocus required value="<?= $row['seri']; ?>">
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
            <input type="text" name="spesifikasi" class="form-control" required value="<?= $row['spesifikasi']; ?>">
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
            <input type="text" name="fitur" class="form-control" required value="<?= $row['fitur']; ?>">
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
            <input type="text" name="harga" class="form-control" required value="<?= $row['harga']; ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <input type="hidden" name="foto_lama" value="<?= $row['foto']; ?>">
            <label>
              Gambar :
            </label>
          </div>
          <div class="col-sm-4">
            <input type="file" name="foto" class="foto" onchange="previewImage()">
            <img src="../assets/img/<?= $row['foto']; ?>" width="150" style="display: block;" class="img-preview">
          </div>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>
  </div>


  <script src="../js/script.js"></script>
</body>

</html>