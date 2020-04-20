<?php
//$_POST


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <form action="latihan5.php" method="post">
    <ul>
    <li>
        <label for="username">Username :</label>
        <br>
        <input type="text" id="username" name="username">
    </li>
    <li>
        <label for="password">Password :</label>
        <br>
        <input type="password" id="password" name="password">
    </li>
    <li>
        <button type="submit" value="submit">Login</button>
    </li>
    </ul>
    </form>
</body>
</html>