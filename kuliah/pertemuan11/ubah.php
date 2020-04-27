<?php
require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
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
  <title>Ubah Data Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Form Ubah Data Mahasiswa
    </a>
    <p>
      <a href="index.php" class="btn btn-primary mt-2">Kembali</a>
    </p>
  </nav>


  <form action="" method="POST" class="ml-5 mt-3">
    <div class="form-group">
      <label>
        Id :
        <input type="hidden" name="id" class="form-control" value="<?= $mhs['id']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Nama :
        <input type="text" name="nama" class="form-control" autofocus required value="<?= $mhs['nama']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        NRP :
        <input type="text" name="nrp" class="form-control" required value="<?= $mhs['nrp']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Email :
        <input type="text" name="email" class="form-control" required value="<?= $mhs['email']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Jurusan :
        <input type="text" name="jurusan" class="form-control" required value="<?= $mhs['jurusan']; ?>">
      </label>
    </div>
    <div class="form-group">
      <label>
        Gambar :
        <input type="text" name="gambar" class="form-control" required value="<?= $mhs['gambar']; ?>">
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
      <button type="reset" name="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
</body>

</html>