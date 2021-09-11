<?php
echo "1. Pengulangan For <br>";
echo "<br>";

for ($i=0; $i <=10; $i++) {
    echo "ini perulangan ke - $i <br>";
}
echo"<br>";
echo "2.pengulangan while <br>";
echo "<br>";
$ulangi = 0;
while ($ulangi <= 10) {
    echo "ini perulangan ke -$ulangi<br>";
    $ulangi++;
}
echo"<br>";
echo"3. perulangan Do-While <br>";
echo"<br>";
$ulangi = 0;
do {
    echo "ini perulangan ke $ulangi<br>";
    $ulangi ++;
} while ($ulangi <= 10);
echo "<br>";
echo "4. ini pengulangan Forech <br>";
$books = [
    "panduan belajar java untuk pemula",
    "membangun Aplikasi java dengan Netbens",
    "Tutorial java dan Mysql",
    "membuat penggajian Desktop dengan java"
];
echo "<h5> judul buku java </h5>";
echo "<ol>";
foreach ($books as $buku) {
    echo "<li> $buku</li>";
}
echo"</ol>";

?>