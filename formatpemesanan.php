<?php


if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $identitas = $_POST ['identitas'];
    $hari = $_POST ['hari'];
    $kamar =$_POST ['kamar'];
    ?>

  <?php 
  
 
    if ($kamar  == "Superior"  ){
      $harga = 850000;
  }   elseif ($kamar == "Deluxe"){
      $harga = 1000000;
  }   elseif ($kamar == "Juniorsuite"){
      $harga = 1400000;
  }
  
  
   
     ?>
     <?php
     $total = $harga * $hari;
     $bayar = $total;
     $potong1 = $bayar -($bayar *(15/100));
     $potong2 = $bayar -($bayar *(20/100));
     
     echo"nama = $nama <br> tanggal menginap = $umur <br>no identitas = $identitas<br> tipe kamar = $kamar<br>berapa hari = 
     $hari<br>Total =$total <br>";}
            
     if($bayar >= 2900000){
        echo "Anda mendapatkan diskon 15%<br>";
        echo "biaya yang harus di bayar =$potong1";
    }elseif($bayar >= 3400000){
            echo "Anda mendapatkan diskon 20%<br>";
            echo "biaya yang harus di bayar =$potong2";
           } 
           else {
               echo "tidak ada diskon";
               
           }


 ?> 
