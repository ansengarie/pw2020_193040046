<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}
require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
  alert('data berhasil dihapus');
  document.location.href ='admin.php';
  </script>";
} else {
  echo "data gagal dihapus!";
}
