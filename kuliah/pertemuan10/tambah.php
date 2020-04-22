<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href ='latihan3.php';
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
  </nav>


  <form action="" method="POST" class="ml-5 mt-3">
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
        <input type="text" name="gambar" class="form-control" required>
      </label>
    </div>
    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data!</button>
  </form>
</body>

</html>