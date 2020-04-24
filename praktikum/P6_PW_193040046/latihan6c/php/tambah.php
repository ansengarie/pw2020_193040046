<?php
require 'functioncs.php';

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
  <title>Tambah Data Smartphone</title>
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
        Foto :
        <input type="text" name="foto" class="form-control" autofocus required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Seri :
        <input type="text" name="seri" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Spesifikasi :
        <input type="text" name="spesifikasi" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Fitur :
        <input type="text" name="fitur" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Harga :
        <input type="text" name="harga" class="form-control" required>
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="tambah" class="btn btn-success">Tambah Data!</button>
      <button type="reset" name="reset" class="btn btn-danger">Reset</button>
    </div>
  </form>
</body>

</html>