<?php

require 'functioncs.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
        alert('Data Berhasil Dihapus! ');
        document.location.href = 'admin.php';
       </script>";
} else {
  echo "<script>
  alert('Data Gagal dihapus! ');
  document.location.href = 'admin.php';
 </script>";
}
