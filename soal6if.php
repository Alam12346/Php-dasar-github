<?php
$int = 99;
$jam = floor($int / 3600);
$menit = floor(($int / 60) % 60);
$detik = $int % 60;

echo "$jam $menit $detik";

?>