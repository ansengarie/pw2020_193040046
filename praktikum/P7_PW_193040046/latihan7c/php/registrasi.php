<?php

require 'functioncs.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil');
    document.location.href ='login.php';
    </script>";
  } else {
    echo "<script>
    alert('Registrasi Gagal');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
  <form action="" method="POST" class="ml-5 mt-3">
    <div class="form-group">
      <label>
        Username :
        <input type="text" name="username" class="form-control" autofocus required>
      </label>
    </div>
    <div class="form-group">
      <label>
        Password :
        <input type="text" name="password" class="form-control" required>
      </label>
    </div>
    <button type="submit" name="register" class="btn btn-success">Register</button>
  </form>
</body>

</html>