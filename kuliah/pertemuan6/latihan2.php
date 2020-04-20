<?php

$angka2 = [ [1,2,3] ,[4,5,6] ,[7,8,9,]];
foreach($angka2 as $a){
    foreach($a as $a2){
        echo $a2;
        
    }
    echo '<br>';
}


echo '<hr>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 30px;
        height: 30px;
        background-color: skyblue;
        transition: 0.5s;
        float: left;
    }
    .kotak:hover{
        transform: rotate(360deg);
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
    <?php
    $angka = [[1,2,3], [4,5,6], [7,8,9]];
    foreach($angka2 as $a){
        foreach($a as $a2){
            echo "<div class='kotak'>" $a2 "</div>";
            
        }
        echo "<div class = 'clear'>";
    }






    
    ?>
</body>
</html>