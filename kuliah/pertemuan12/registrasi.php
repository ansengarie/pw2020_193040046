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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
  <div id="login">
    <h3 class="text-center text-info">Form Registrasi</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form action="" method="POST" class="form">
              <div class="form-group">
                <label for="username" class="text-info">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control" autocomplete="off" autofocus>
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Password:</label><br>
                <input type="password" name="password1" id="password1" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Konfirmasi Password:</label><br>
                <input type="password" name="password2" id="password2" class="form-control">
              </div>
              <input type="submit" name="registrasi" class="btn btn-info btn-md" value="Registrasi!">
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>