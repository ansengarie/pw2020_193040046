<?php
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        echo '<h1> Selamat datang Admin!</h1>';
    }else{
        echo '<h1> Username / Password Salah!</h1>';
    }

?>
