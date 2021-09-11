<?php
echo "1. Output array dengan menggunakan perintah PRINT_R()";

$array = [];

$array [] = 'indonesia';
$array [] = 'malaysia';
$array [] = 'singapura';
$array [] = 'Brunei Darussalam';
$array [] = 'Filipina';
echo '<pre>';
print_r($array);

  
echo "<br>2. Output array assosiatif<br><br>";

$negara =[
    'jakarta<br>' => 'ibukota indonesia adalah',
    'kuala lumpur<br>'=> 'ibukota malaysia adalah',
    'singapura<br>' => 'ibukota singapura adalah',
    'bangkok<br>' => 'ibukota thailand adalah',
    'manila<br>' => 'ibukota Filipina adalah'];

    foreach($negara as $key => $value) {
        echo '<li>';
        echo $value .' '. $key;
        echo '<br>';
        echo'</li>';
    }
?>




