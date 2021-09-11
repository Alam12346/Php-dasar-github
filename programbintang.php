<!DOCTYPE html>
<html >
<head>
    <title>pengulangan bintang</title>
</head>
<body>
    <form action="" method="POST">
    masukan Bintang <input type="text" name="bintang"> <input type="submit"  name= "submit"value="submit">
    </form>
    
</body>
</html>
<?php
if(isset($_POST ['submit'])){
    $bin = $_POST ['bintang'];
    
            for($a = 1; $a <= $bin; $a++){
        for($b = 1; $b <= $a; $b++){
            echo "*";
        }
       echo"<br>";
    }
    echo"program bilangan genap";
    echo "<br>";
    $bil = 2;
    while ($bil <= $bin ) {
         if( ($bil % 2) == 0) {
             echo "".$bil."<br>";
            $bil++;
            }
        else{
             $bil++;
         } 
    }}
?>
