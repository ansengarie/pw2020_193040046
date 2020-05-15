<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru berhasil ditambahkan. silahkan login');
          document.location.href = 'login.php';
        </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Registrasi</title>
  <link rel="shortcut icon" href="../assets/img/regis.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/Footer-Basic.css">
  <link rel="stylesheet" href="../css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body style="height: 700px;">
  <div class="register-photo" style="height: 700;">
    <div class="form-container">
      <form method="post" style="height: 400px;">
        <h2 class="text-center" style="font-family: Allerta, sans-serif;color: rgb(255,0,0);">
          <strong>Buat </strong>akun
        </h2>
        <div class="form-group">
          <label for="username" class="text-danger">Username :</label>
          <input class="form-control" type="text" name="username" id="username" style="background-color: rgb(255,255,255);" required autofocus autocomplete="off">
        </div>
        <div class="form-group">
          <label for="password" class="text-danger">Password :</label>
          <input class="form-control" type="password" name="password1" id="password1" style="background-color: rgb(255,255,255);" required>
        </div>
        <div class="form-group">
          <label for="password" class="text-danger">Konfirmasi Password :</label>
          <input class="form-control" type="password" name="password2" id="password2" style="background-color: rgb(255,255,255);" required>
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-block" data-bs-hover-animate="pulse" name="registrasi" type="submit" style="background-color: rgb(255,0,53);">Registrasi</button>
        </div>
        <a class="already" href="login.php">Sudah punya akun? Login disini.</a>
      </form>
    </div>
  </div>
  <div class="footer-basic" style="background-color: rgb(241,247,252);height: 150px;">
    <footer>
      <p class="copyright mt-5" style="margin-top: 58px;">Jee Elektronik © 2020</p>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/bs-animation.js"></script>
</body>

</html>