<?php
//membuat array
//cara lama

$mhs = array('Aji', 'Aldi', 'Rio', 'Ray', 'Yoga');
for($i = 0;$i < count($mhs);$i++){
    echo $mhs[$i];
    echo'<br>';
}
echo'<hr>';

//foreach
foreach($mhs as $m){
    echo $m;
    echo '<br>';
}

echo '<hr>';

var_dump($mhs);
echo'<br>';
print_r($mhs);

?>