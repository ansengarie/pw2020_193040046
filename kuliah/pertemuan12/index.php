<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      Daftar Mahasiswa
    </a>
    <p>
      <a href="tambah.php" class="btn btn-success mt-2">Tambah Data Mahasiswa</a>
    </p>
    <p>
      <a href="logout.php">Logout</a>
    </p>
  </nav>

  <form action="" method="POST" class="mt-2 mb-2 ml-5">
    <input type="text" name="keyword" placeholder="Masukkan keyword pencarian" autofocus autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>

  <div class="row">
    <?php if (empty($mahasiswa)) : ?>
      <div class="col-md-12">
        <h1 class="text-center">Data mahasiswa tidak ditemukan!</h3>
      </div>
    <?php endif; ?>
  </div>

  <div class="container-fluid">
    <div class="row">
      <?php foreach ($mahasiswa as $mhs) : ?>
        <div class="col-md-4">
          <p class="nama">
            <div class="card mt-3  mb-4 ml-5" style="width: 18rem;">
              <img class="card" src="img/<?= $mhs['gambar']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                <a href="detail.php?id=<?= $mhs['id']; ?>" class="btn btn-primary">Lihat detail</a>
              </div>
            </div>

          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- footer -->
  <footer class="text-white bg-secondary mt-5">
    <div class="container">
      <div class="row pt-4">
        <div class="col text-left">
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

</body>

</html>