<?php

require 'php/functioncs.php';

$elektronik = query("SELECT * FROM elektronik");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Phone Store</title>
    <link rel="shortcut icon" href="assets/img/s.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/banner.png" class="d-inline-block align-top banner" alt="">
  </a>
  <p>
      Do bigger things with Galaxy.
  </p>
</nav>
<!-- /navbar -->
<div class="container-fluid">
<div class="row">
<?php foreach($elektronik as $row) : ?>
    <div class="col-md-4">
    <p class="nama">
            <div class="card mt-3  mb-4 ml-5" style="width: 18rem;">
        <img class="card img-fluid max-foto" src="assets/img/<?= $row['foto']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $row['seri']; ?></h5>
            <a href="php/detail.php?id=<?= $row['id']; ?>" class="btn btn-primary">Detail</a>
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