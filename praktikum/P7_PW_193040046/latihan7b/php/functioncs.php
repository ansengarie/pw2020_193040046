<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal.");
    mysqli_select_db($conn, "tubes_193040046") or die("Database salah!");

    return $conn;
}


function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $seri = htmlspecialchars($data['seri']);
    $spesifikasi = htmlspecialchars($data['spesifikasi']);
    $fitur = htmlspecialchars($data['fitur']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO elektronik
                        VALUES
                        ('','$foto','$seri','$spesifikasi','$fitur','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto = htmlspecialchars($data['foto']);
    $seri = htmlspecialchars($data['seri']);
    $spesifikasi = htmlspecialchars($data['spesifikasi']);
    $fitur = htmlspecialchars($data['fitur']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE elektronik SET
                foto = '$foto',
                seri = '$seri',
                spesifikasi = '$spesifikasi',
                fitur = '$fitur',
                harga = '$harga'
                WHERE id = '$id' ";
    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username from user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user values ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
