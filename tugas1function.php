<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1 function</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="input" >
    <input type="submit" value="submit" name="submit">


<?php
if(isset($_POST['submit'])){
    $input = $_POST ['input'];

function luaslingkaran($input , $phi=3.14){
$luas = $phi * $input * $input;
return $luas;
}
function kelilinglingkaran($input , $phi=3.14){
    $lingkaran = 2 * ($input * $phi);
    return $lingkaran;
    }

//memanggil fungsi
echo "<tr><td>";
echo "jari jari nya :  $input, </td></tr><br>";
echo "<tr><td>";
echo "keliling luas nya : ".luaslingkaran($input) .", ";
echo "</tr></td><br><tr><td>";
echo "kelilinglingkaran nya : ".kelilinglingkaran($input) ." </tr></td>";
}
?></form></body>
</html>