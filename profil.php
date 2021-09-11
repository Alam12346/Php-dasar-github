<!DOCTYPE html>
<html>
<head>
    <title>profil</title>
</head>
<body>
<h2> KONSER AMAL ASSALAM BAHAGIA
</h2>
<hr>
<form method="POST" action="konserassalam.php">
<tr><input type="submit" value="INPUT KEMBALI" name ="submit"></tr>
</form>
</body>
</html>
<?Php

if (isset($_POST['submit'])) {
    $namapemesan = $_POST['namapemesan'];
    $kodestudio = $_POST['kodestudio'];
    $jeniskelas = $_POST['jeniskelas'];
    $jumlahtiket= $_POST['jumlahtiket'];
    $jeniskelas= $_POST['jeniskelas'];

?>

<?php

if ($jeniskelas == "VIP"  ){
        $harga = 500000;
}   elseif ($jeniskelas == "FESTIVAL"){
    $harga = 1000000;
}$total = $harga * $jumlahtiket;


?>
<?php
  } "nama pemesanan = $namapemesan <br> Kode Studio  = $kodestudio <br>
    jenis Kelas = $jeniskelas<br> harga = $harga <br> Jumlah Tiket = $jumlahtiket <br>total = $total";
?>


<!-- vip opik
    festival rahman -->