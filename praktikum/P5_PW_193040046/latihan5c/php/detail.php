<?php

if(!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require 'functioncs.php';

$id = $_GET['id'];

$row = query("SELECT * FROM elektronik WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../assets/img/s.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="../assets/img/banner.png" class="d-inline-block align-top banner" alt="">
  </a>
  <p>
      Do bigger things with Galaxy.
  </p>
</nav>
<!-- /navbar -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                 <div class="gambar">
                    <img src="../assets/img/<?= $row['foto']; ?>" alt="">
                 </div>
             </div>
            <div class="col-md-8">
                 <div class="keterangan">
                    <h1 class="mb-5 mt-4"><?= $row['seri']; ?></h1>
                    <h4 class="mb-3"><?= $row['spesifikasi']; ?></h4>
                    <h4 class="mb-3"><?= $row['fitur']; ?></h4>
                    <h4 class="mb-3">Rp <?= number_format($row['harga'], 0, ',', '.');?></h4>
                    <a href="../index.php" class="btn btn-primary mt-5">Kembali</a>
                </div>
             </div>
        </div>
    </div>
<!-- footer -->
<footer class="text-white bg-secondary mt-5 fixed-footer">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <p>Copyright 2019.</p>
                </div>
            </div>
        </div>
</footer>
<script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</script>

</body>
</html>