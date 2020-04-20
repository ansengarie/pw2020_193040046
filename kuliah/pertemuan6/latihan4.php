<?php 

$daftarmahasiswa = [ 
                    ['Aji Nuansa Sengarie', 193040046, 'ansengarie@gmail.com', 'Teknik Informatika'],
                    ['Aldi Ageng', 193040054, 'aldie@gmail.com', 'Teknik Informatika'],
                    ['Rayhan', 193040044, 'raykopites@gmail.com', 'Teknik Informatika'],
                    ['Rio Alifian', 193040060, 'rioaja@gmail.com', 'Teknik Informatika'],
                    ['Sahid Jafar', 193040058, 'sahidsadboy@gmail.com', 'Teknik Informatika']
                    ];

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


    <ul>
        <li>Nama : <?= $daftarmahasiswa[0][0];?></li>
        <li>Nrp : 193040046<?= $daftarmahasiswa[0][1];?></li>
        <li>Email : <?= $daftarmahasiswa[0][2];?></li>
        <li>Jurusan : <?= $daftarmahasiswa[0][3];?></li>
    </ul>

        <?php foreach($daftarmahasiswa as $list) : ?>
    <ul>
        <li>Nama : <?= $list[0]?></li>
        <li>Nrp : <?= $list[1]?></li>
        <li>Email : <?= $list[2]?></li>
        <li>Jurusan : <?= $list[3]?></li>
    </ul>

        <?php endforeach;?>



    

</body>
</html>