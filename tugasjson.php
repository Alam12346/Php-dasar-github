<?php

$json = '{
    "nama": "dosen danny indra gunawan",
    "nama1" : "dosen muhammad sabar",
    "nama2": "dosen tarsinah sumarni",
    "nama3" : " dosen saepudin"
    }';

    $murid1 = '{
        "agus" : [
           "nim : 12341", "nama : agus", "umur :22"," email :agus@gmail.com"
        ], 
        "jajang" : [
            "nim : 12341", "nama : jajang", "umur :20"," email :jajang@gmail.com"
         ], 
         "engkus" : [
            "nim : 12341", "nama : engkus", "umur :22"," email :engkus@gmail.com"
         ], 
         "soleh" : [
            "nim : 12341", "nama : soleh", "umur :21"," email :soleh@gmail.com"
         ], 
         "saep" : [
            "nim : 12341", "nama : saep", "umur :21"," email :saep@gmail.com"
         ]
        }';
        $dosen = json_decode($json);

        echo "<br>1. {$dosen -> nama} <br>";

        $data = json_decode($murid1);
    echo "<br>1. ". implode ("<br>", $data->agus);
    echo "<br>2. ". implode("<br>", $data->jajang);
    echo "<br>2. ". implode("<br>", $data->engkus);
    echo "<br>3. " . implode("<br>", $data->soleh);
    echo "<br>4. ". implode("<br>", $data->saep);

    $murid2 = '{
        "wildan" : [
           "nim : 123411", "nama : wildan", "umur :21"," email :wildan@gmail.com"
        ], 
        "bima" : [
            "nim : 123412", "nama : bima", "umur :22"," email :bima@gmail.com"
         ], 
         "irfan" : [
            "nim : 123413", "nama : irfan", "umur :21"," email :irfan@gmail.com"
         ], 
         "kiki" : [
            "nim : 123414", "nama : kiki", "umur :20"," email :kiki@gmail.com"
         ], 
         "zulfan" : [
            "nim : 123415", "nama : zulfan", "umur :23"," email :zulfan@gmail.com"
         ]
        }';
        $dosen = json_decode($json);
echo "<br>";
        echo "<br>2. {$dosen -> nama1} <br>";

        $data = json_decode($murid2);
    echo "<br>1. ". implode ("<br>", $data->wildan);
    echo "<br>2. ". implode("<br>", $data->bima);
    echo "<br>2. ". implode("<br>", $data->irfan);
    echo "<br>3. " . implode("<br>", $data->kiki);
    echo "<br>4. ". implode("<br>", $data->zulfan);

    $murid3 = '{
        "aji" : [
           "nim : 123416", "nama : aji", "umur :24"," email :aji@gmail.com"
        ], 
        "dadang" : [
            "nim : 123417", "nama : dadang", "umur :21"," email :dadang@gmail.com"
         ], 
         "iwan" : [
            "nim : 123418", "nama : iwan", "umur :19"," email :iwan@gmail.com"
         ], 
         "akbar" : [
            "nim : 123419", "nama : akbar", "umur :20"," email :akbar@gmail.com"
         ], 
         "alif" : [
            "nim : 123410", "nama : alif", "umur :20"," email :alif@gmail.com"
         ]
        }';
        $dosen = json_decode($json);
        echo "<br><br>";
        echo "3. {$dosen -> nama2} <br>";
        $data = json_decode($murid3);
    echo "<br>1. ". implode ("<br>", $data->aji);
    echo "<br>2. ". implode("<br>", $data->dadang);
    echo "<br>2. ". implode("<br>", $data->iwan);
    echo "<br>3. " . implode("<br>", $data->akbar);
    echo "<br>4. ". implode("<br>", $data->alif);


    $murid4 = '{
        "galih" : [
           "nim : 123421", "nama : galih", "umur :22"," email :galih@gmail.com"
        ], 
        "angga" : [
            "nim : 123422", "nama : angga", "umur :23"," email :angga@gmail.com"
         ], 
         "jaki" : [
            "nim : 123423", "nama : jaki", "umur :20"," email :jaki@gmail.com"
         ], 
         "stepen" : [
            "nim : 123424", "nama : stepen", "umur :19"," email :stepen@gmail.com"
         ], 
         "john" : [
            "nim : 123425", "nama : john", "umur :22"," email :john@gmail.com"
         ]
        }';
        $dosen = json_decode($json);
        echo "<br><br>";
        echo "4. {$dosen -> nama3} <br>";
        $data = json_decode($murid4);
    echo "<br>1. ". implode ("<br>", $data->galih);
    echo "<br>2. ". implode("<br>", $data->angga);
    echo "<br>3. ". implode("<br>", $data->jaki);
    echo "<br>4. " . implode("<br>", $data->stepen);
    echo "<br>5. ". implode("<br>", $data->john);
    


?>