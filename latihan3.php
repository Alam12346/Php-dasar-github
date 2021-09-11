
 <?php

$jurus =[
    'jurusan teknik informatika' => 'ada di index 0',
    'jurusan sistem informasi' => 'ada di index 1',
    'jurusan teknik komputer' => 'ada di index 2',
    'jurusan manajemen informatika' => 'ada di index 3'];
  
// echo $jurus['jurusan teknik informatika'];

foreach($jurus as $key => $value) {
    echo $key .'   -'. $value;
    echo '<br>';
}


?>