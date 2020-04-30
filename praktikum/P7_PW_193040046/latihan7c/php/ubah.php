<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}

require 'functioncs.php';

$id = $_GET['id'];
$row = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah!');
    document.location.href ='admin.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal diubah!');
    document.location.href ='admin.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Smartphone</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Form Tambah Smartphone
    </a>
    <p>
      <a href="admin.php" class="btn btn-primary mt-2">Kembali</a>
    </p>
  </nav>


  <form action="" method="POST" class="ml-5 mt-3">
    <div class="form-group">
      <label>
        Id :
        <input type="hidden" name="id" id="id" class="form-control" value="<?= $row['id']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Foto :
        <input type="text" name="foto" class="form-control" value="<?= $row['foto']; ?>" autofocus required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Seri :
        <input type="text" name="seri" class="form-control" value="<?= $row['seri']; ?>" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Spesifikasi :
        <input type="text" name="spesifikasi" class="form-control" value="<?= $row['spesifikasi']; ?>" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Fitur :
        <input type="text" name="fitur" class="form-control" value="<?= $row['fitur']; ?>" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Harga :
        <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
      <button type="reset" name="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
</body>

</html>