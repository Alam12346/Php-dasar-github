
 <?php
 //1
echo "1.Contoh program array numeric<br>";
$jurusan= ('jurusan teknik informatika<br>' .'jurusan sistem informasi<br>'.
 'jurusan teknik komputer<br>'.'jurusan manajemen informatika<br>');
$index= "index ke ";  
    echo "$jurusan";
for ($i=0; $i <=5; $i++) {
    echo "$jurusan$index";
} 
$kata = 'kata kunci index ';
$jurus =[
    '=jurusan1, nilai' => 'teknik informatika',
    '=jurusan2, nilai ' => 'sistem informasi',
    '=jurusan3, nilai' => 'teknik komputer',
    '=jurusan4, nilai ' => 'manajemen informasi'];

echo "<br><br>2. contoh program array assosiatif<br>";
foreach($jurus as $key => $value) {
    echo  "$kata $key ".'   -'." $value";
    echo '<br>';
}


?>