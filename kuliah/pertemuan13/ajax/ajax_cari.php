<?php

require '../functions.php';

$mahasiswa = cari($_GET['keyword']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="row">
    <?php if (empty($mahasiswa)) : ?>
      <div class="col-md-12">
        <h1 class="text-center">Data mahasiswa tidak ditemukan!</h3>
      </div>
    <?php endif; ?>
  </div>

  <div class="container container-fluid">
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

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </script>
  <script src="js/script.js"></script>
</body>

</html>