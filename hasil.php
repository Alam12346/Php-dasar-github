<!DOCTYPE html>
<html >
<head>
    <title>hasil</title>
</head>
<body> <CEnter><form action="registrasi.html" method="post">
    <H4>
    MENAMPILKAN DATA SISWA</H4>
    <a href="registrasi.html">
        <input type="submit" value="tambah siswa">
    <br><br><br>
    </a>
    </form>
<?php
    if(isset($_POST ['submit'])){
        $nama = $_POST ['nama'];
        $jenis = $_POST ['jenis'];
        $kelas = $_POST ['kelas'];
        $alamat = $_POST ['alamat'];
    
    ?>
    <table border =1>
        <tr><td> no</th>
        <th >Nama</th>
        <th >Jenis Kelamin</th>
        <th>Kelas</th>
        <th >Alamat</th>
        </tr>
        
        <tr><td> 1</td>
        <td>
        <?php
        echo $_POST['nama'];
        ?>
        </td>
        <td><?php
        echo $_POST['jenis'];
        ?></td>
        <td><?php
        echo $_POST['kelas'];
        ?></td>
        <td><?php
        echo $_POST['alamat'];
}?></td>
        </tr>

    </table>
    

    </CEnter>
    
</body>
</html>