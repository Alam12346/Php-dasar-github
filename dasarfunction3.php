<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("muhardian", "Hi");
echo "<hr>";

$saya = "indry";
$ucapansalam = "selamat pagi";
//memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);

?>