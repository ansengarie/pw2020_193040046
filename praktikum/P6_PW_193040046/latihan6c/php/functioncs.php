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
