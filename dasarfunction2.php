<?php
//membuat fungsi

function perkenalan ($nama, $salam){
    echo $salam.", ";
    echo"perkenalkan, nama saya ".$nama."<br/>";
    echo "senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("muhardian", "Hi");

echo"<hr>";


$saya = "indry";
$ucapansalam = "selamat pagi";
//memanggilnya lagi
perkenalan($saya, $ucapansalam);
?>
