<?php
require 'functioncs.php';

$row = query("SELECT * FROM elektronik");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $elektronik = query("SELECT * FROM elektronik WHERE 
                        foto LIKE '%$keyword%' OR
                        seri LIKE '%$keyword%' OR
                        spesifikasi LIKE '%$keyword%' OR 
                        fitur LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
} else if (isset($_GET['refresh'])) {
    echo "<script>
    document.location.href = 'admin.php';
    </script>";
} else {
    $elektronik = query("SELECT * FROM elektronik");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Phone</title>
    <link rel="shortcut icon" href="../assets/img/s.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>


<body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/img/banner.png" class="d-inline-block align-top banner" alt="">
        </a>
        <p>
            Do bigger things with Galaxy.
        </p>
    </nav>
    <!-- /navbar -->
    <a href="tambah.php" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
    <form action="" method="GET" class="mt-2 mb-2">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <div class="table-responsive">
        <table border="1" cellpadding="13" cellspacing="0" class="table">
            <tr>
                <th>#</th>
                <th width="150px">Opsi</th>
                <th width="400px">Foto</th>
                <th>Seri</th>
                <th>Spesifikasi</th>
                <th width="300px">Fitur</th>
                <th width="200px">Harga</th>
            </tr>
            <?php if (empty($elektronik)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($elektronik as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-primary">Ubah</a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a>
                        </td>
                        <td><img src="../assets/img/<?= $row['foto']; ?>" alt="" class="img-fluid"></td>
                        <td><?= $row['seri']; ?></td>
                        <td><?= $row['spesifikasi']; ?></td>
                        <td><?= $row['fitur']; ?></td>
                        <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

</body>

<!-- footer -->
<footer class="text-white bg-secondary">
    <div class="container">
        <div class="row pt-4">
            <div class="col text-left">
                <p>Copyright 2019.</p>
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

</html>