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
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="container">
        <!-- navbar -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/banner.png" class="d-inline-block align-top banner" alt="">
            </a>
            <p>
                Do bigger things with Galaxy.
            </p>
        </nav>

        <!-- table -->
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th width="600px">Foto</th>
                    <th>Seri</th>
                    <th>Spesifikasi</th>
                    <th width="300px">Fitur</th>
                    <th width="200px">Harga</th>
                </tr>
                <?php foreach ($elektronik as $row) : ?>
                    <tr>
                        <td><img src="assets/img/<?= $row['foto']; ?>" class="img-fluid"></td>
                        <td class="grey"><?= $row['seri']; ?></td>
                        <td class=""><?= $row['spesifikasi']; ?></td>
                        <td class="grey"><?= $row['fitur']; ?></td>
                        <td class="">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <?php endforeach; ?>
                    </tr>

            </table>
        </div>


        <!-- footer -->
        <div id="footer">
            Copyright &copy; 2020
        </div>
    </div>

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