<html >
<head>
    <title>pengulangan bintang</title>
</head>
<body>
<center>
    <form action="" method="POST">
   input bilangan
  <input type="text" name="bintang"> 
  <input type="submit"  name= "submit"value="submit">
  
<br><br><br></form>
</center>



<?php

if(isset($_POST ['submit'])){
    echo "cari rata rata bilangan";
    $bin = $_POST ['bintang'];
    echo "<form method='post' action='hasilratarata.php'>";

     for ($i = 0; $i <= $bin-1; $i++)
        {
            echo"bil ke-".($i+1). "<input type='text' name='data".$i."' /><br>";
        }
        echo "<input type='submit' name='submit' value='submit'/>";
        echo"<input type='hidden' name='bin' value='".$bin."'/>";
        echo"</form>";
    
     }

    ?>

</body>
</html>