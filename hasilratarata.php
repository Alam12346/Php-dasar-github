<h1>Rata rata bilangan</h1>
<?php
$bin = $_POST ['bin'];
for ($i=0; $i<= $bin -1; $i++)
(
   $data[$i] = $_POST ['data'.$i.];
) 
$jumlah = 0;
for ($i=0; $i <= $bin - 1; $i++)
{
    $jumlah += $data[$i];
}
$ratarata = $jumlah/$bin;
for ($i=0; $i <= $bin - 1; $i++)
{
    echo"Bilangan ke- ".($i+1). "=".$data[$i]. "<br>";
}
echo "<br> rata ratanya adalah :".$ratarata;


?>