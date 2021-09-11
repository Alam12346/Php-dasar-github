<?php
$listmahasiswajson = '[
    { "nama": "nurul huda" },
    {"nama": "renza ilhami risqi"},
    {"nama": "taufan aji"},
    {"nama": "rahmad dwi oktanto"}
]';
    
$listmahasiswa = json_decode($listmahasiswajson);

foreach($listmahasiswa as $key => $mahasiswa) {
     echo "{$key}. nama: {$mahasiswa->nama} <br>";
 }

?>