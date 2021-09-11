<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>tugas 2 function</title>
</head>
<body>
    <form method="POST">
        <table >
        <tr> <td>nama :</td>
    <td><input type="text" name="nama"></td></tr><br>
    <tr><td> jenis kelamin : </td>
    <td><input type="radio" name= "jeniskelamin" value="laki-laki">laki-laki</input>
    <input type="radio" name= "jeniskelamin" value="perempuan">perempuan</input></td></tr>
    <br>
    <tr><td> tanggal lahir :</td>
    <td><input type="date" name="tanggallahir"></td>
    </tr>
    
    <br>

<tr>
    <td>agama : </td>
    <td><select name="agama">
        <option ></option>
        <option value="islam">islam</option>
        <option value="kristen">kristen</option>
    </select></td></tr>

    <tr><td> alamat : </td>
    <td><textarea name="alamat"  cols="30" rows="10"></textarea></td></tr>
        <tr><td> hobi </td>
        <td><?php $hobijson= ['mancing' ,'ngurek','jajan' ,'main','mainhp','ngoding'];

    echo "<input type='checkbox' name='hobi[]' value='mancing'>mancing";
    echo "<input type='checkbox' name='hobi[]' value='ngurek'>ngurek";
    echo"<input type='checkbox' name='hobi[]' value='jajan'>jajan <br>";
    echo"<input type='checkbox' name='hobi[]' value='main'>main";
    echo"<input type='checkbox' name='hobi[]' value='mainhp'>mainhp";
    echo"<input type='checkbox' name='hobi[]' value='ngoding'>ngoding";
    

    
    ?></td></tr><tr> <td> <center>  <input type="submit" value="submit" name="submit"></center>
        </td></tr>
</table></form><!-- 
$datajson ="[5,4,3,2,1]";

$data =json_decode($datajson);

echo implode(" - ", $data); -->

<?php

if(isset($_POST['submit'])){
    $nama = $_POST ['nama'];
    $jeniskelamin = $_POST ['jeniskelamin'];
    $tanggallahir = $_POST ['tanggallahir'];
    $agama = $_POST ['agama'];
    $alamat = $_POST ['alamat'];
    $hobi = $_POST ['hobi'];
    
    
?>


<?php
echo "nama : $nama <br> jenis kelamin : $jeniskelamin <br> tanggal lahir : $tanggallahir <br> agama : $agama <br>
alamat : $alamat <br>";
echo "hobi :";
echo implode(" - ", $hobi);
}?>



</body>
</html>