<?php
$bulan = "MEI";
$bayar = 1000000;
$mei = 30;
$juni =20;
$juli = 10;
$potong1 = $bayar -($bayar *($mei/100));
$potong2 = $bayar -($bayar *($juni/100));
$potong3 = $bayar -($bayar *($juli/100));

if($bulan == "MEI"){
    echo "Daftar pada bulan $bulan<br>";
    echo "Anda mendapatkan diskon 30%<br>";
    echo "biaya yang harus di bayar =$potong1";
}elseif($bulan == "juni"){
        echo "Daftar pada bulan $bulan<br>";
        echo "Anda mendapatkan diskon 20%<br>";
        echo "biaya yang harus di bayar =$potong2";
       }       elseif($bulan == "juli"){
            echo "Daftar pada bulan $bulan<br>";
            echo "Anda mendapatkan diskon 10%<br>";
            echo "biaya yang harus di bayar =$potong3";
               }        else {
                echo "Data tidak di temukan";
                }

?>