<!DOCTYPE html>
<html >
<head>
    <title>penginapan</title>
</head>
<body><center>
    <hr><hr><h2>Hotel penginapan</h2>
    <hr><form method="POST" action="formatpemesanan.php">
    <table>
    
    <td>Nama</td>
    <td>:</td>
    <td><input type='text' name='nama'></td>
    </tr>
    <tr><td>Tanggal menginap</td>
    <td>:</td>
    <td><input type='date' name= 'umur'></td>
    </tr>
    <tr>
    <td>no identitas</td>
    <td>:</td>
    <td><input type="text" name="identitas" ></td></tr>
    <tr>
    <td></td>
    <td></td><tr>
    <td>tipe kamar</td>
    <td>:</td><td>
    <select name="kamar" >
    <option value="Superior" >Superior 850rb/Hari</option>
    <option value="Deluxe" >Deluxe 950rb/hari</option>
    <option value="Juniorsuite" >Junior 1.400rb/hari</option></select>
    </td></tr></tr>
    <td>berapa hari</td>
    <td>:</td>
    <td><input type="text" name="hari"></td>
    
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value='kirim'></td>
    </tr>
    </table>
    </form>
    </center>




  
</body>
</html>