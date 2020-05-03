<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
  <div id="login">
    <h3 class="text-center text-info">Login form</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <?php if (isset($login['error'])) : ?>
              <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
            <?php endif; ?>
            <form action="" method="POST" class="form">
              <div class="form-group">
                <label for="username" class="text-info">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control" autocomplete="off" autofocus>
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
              <div id="register-link" class="text-right">
                <a href="registrasi.php" class="text-info">Register here</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>