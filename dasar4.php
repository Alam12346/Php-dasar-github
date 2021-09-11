<!DOCTYPE html>
<html >
<head>
    <title>form sederhana</title>
</head>
<body>
    <h2>Form sederhana</h2>
    <form method="POST" action="">
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type='text' name='nama'></td>
    </tr>
    <tr><td>umur</td>
    <td>:</td>
    <td><input type='text' name= 'umur'></td>
    </tr>
    <tr><td>alamat</td>
    <td>:</td>
    <td><input type='text' name= 'alamat'></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value='kirim'></td>
    </tr>
    </table>
    </form>


</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    echo"nama = $nama <br> umur = $umur <br>alamat = $alamat";
}
?>