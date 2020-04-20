<?php 
//ARRAY
//VARIABEL jamak yang bisa diisi banyak nilai
//pasangan yang terdiri dari KEY & VALUE


//Array Numerik
//Array yang KEYnya adalah ANGKA, disebut juga INDEX
//INDEX dibuat otomatis oleh PHP
//INDEX selalu dimulai dari 0


//Array ASSOSCIATIVE
//Array yang key nya adalah STRING
//dibuat oleh programmer
$daftarmahasiswa = [ 
        [
            "nama" => "Aji",
            "nrp" => "193040046",
            "email" => "ansengarie@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Aldi",
            "nrp" => "193040054",
            "email" => "aldi@gmail.com",
            "jurusan" => "Teknik Informatika"
        ]
    ];


    $buku = [
        "judul"     => "Harry Potter and Socrceres Stone",
        "pengarang" => "J.K Rowling",
        "penerbit"  => "Gramedia",
        "genre"     => "SciFi"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>

    <?php foreach($daftarmahasiswa as $list) : ?>
        <ul>
            <li>Nama : <?= $list["nama"]?></li>
            <li>Nrp : <?= $list["nrp"]?></li>
            <li>Email : <?= $list["email"]?></li>
            <li>Jurusan : <?= $list["jurusan"]?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>