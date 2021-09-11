<?php $hobi= array('mancing' ,'ngurek','jajan' ,'main','mainhp','ngoding');?>
<!-- 
    // echo "<input type='checkbox' name='hobi' value='mancing'>mancing";
    // echo "<input type='checkbox' name='hobi' value='ngurek'>ngurek";
    // echo"<input type='checkbox' name='hobi' value='jajan'>jajan <br>";
    // echo"<input type='checkbox' name='hobi' value='main'>main";
    // echo"<input type='checkbox' name='hobi' value='mainhp'>mainhp";
    // echo"<input type='checkbox' name='hobi' value='ngoding'>ngoding"; -->
    <!-- <div class="container">
        <label for="category">select hobi</label> -->
    
    <?php
    $total = count($hobi);
    for ($a=0; $a<$total; $a++){
    echo "<label><input type='checkbox' name='hobi'value='$hobi[$a]'>".ucsfirst($hobi[$a])."</label>";}
    ?>