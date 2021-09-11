<?php

$url="https://api.kawalcorona.com/positif/";
//persiapkan curl/init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL,$url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$datacovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data covid provinsi indonesia</title>
</head>
<body>
<center><nav>
    <a href="datacovid.php">data covid</a>
    <a href="dataindonesia.php">data indonesia</a>
    <a href="datacovidprovinsi.php">data covid provinsi</a>
    <a href="globaldatapositif.php">datapositifglobal</a>
    <a href="globalsembuh.php">data global sembuh</a>
    <a href="globalmeninggal.php">data global meninggal</a>
    </nav>
    </center>
    <fieldset>
        <legend>data covid</legend>
        <table border=1>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>total positif</th>
                
            </tr>
            <?php
            $no =1;
            $data =json_decode($datacovid);
            foreach($data as $covid){

            
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data->name;?></td>
                <td><?php echo $data->value;?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </fieldset>

</body>
</html>