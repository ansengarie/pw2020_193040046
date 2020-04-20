<?php
//SUPERGLOBALS
//VARIABEL BAWAAN PHP YANG BISA DI AKSES DIMANA SAJA
//BENTUKNYA ADALAH ARRAY ASSOCIATIVE
//$_COOKIE
//$_GET
//$_POST
//$_SERVER
//$_SESSION


//$_GET
//bisa mengambil data dari url
print_r($_GET);


echo '<h1> Selamat Datang ' . $_GET['nama'] . '</h1>';

?>