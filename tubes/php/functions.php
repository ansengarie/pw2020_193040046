<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal.");
  mysqli_select_db($conn, "tubes_193040046") or die("Database salah!");

  return $conn;
}


function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  //ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu!');
    //     </script>";
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
    alert('yang anda pilih bukan gambar!');
  </script>";
    return false;
  }

  //cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert('pilih gambar terlebih dahulu!');
  </script>";
    return false;
  }

  //cek ukuran file
  //maks 5mb == 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
    alert('ukuran terlalu besar!');
  </script>";
  }

  //lolos pengecekan
  //siap upload
  //generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}


function tambah($data)
{
  $conn = koneksi();

  $seri = htmlspecialchars($data['seri']);
  $spesifikasi = htmlspecialchars($data['spesifikasi']);
  $fitur = htmlspecialchars($data['fitur']);
  $harga = htmlspecialchars($data['harga']);
  // $gambar = htmlspecialchars($data['gambar']);

  //upload gambar
  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO
            elektronik
            VALUES
            (null, '$foto', '$seri', '$spesifikasi', '$fitur', '$harga' )
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  //menghapus  gambar di folder img
  $row = query("SELECT * FROM elektronik WHERE id = $id");
  if ($row['foto'] != 'nophoto.jpg') {
    unlink('../assets/img/' . $row['foto']);
  }


  mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $seri = htmlspecialchars($data['seri']);
  $spesifikasi = htmlspecialchars($data['spesifikasi']);
  $fitur = htmlspecialchars($data['fitur']);
  $harga = htmlspecialchars($data['harga']);
  $foto_lama = htmlspecialchars($data['foto_lama']);

  $foto = upload();
  if (!$foto) {
    return false;
  }

  if ($foto == 'nophoto.jpg') {
    $foto = $foto_lama;
  }

  $query = "UPDATE elektronik SET  
            seri = '$seri',
            spesifikasi = '$spesifikasi',
            fitur = '$fitur',
            harga = '$harga',
            foto = '$foto'
            WHERE id = '$id' ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM elektronik
            WHERE seri LIKE '%$keyword%' OR
            spesifikasi LIKE '%$keyword%' OR
            fitur LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";


  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: admin.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / pw kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('username / password tidak boleh kosong!');
          document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
    alert('username sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai!');
          document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
        alert('password terlalu pendek!');
        document.location.href = 'registrasi.php';
        </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
