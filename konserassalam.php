<html >
<head>
    <title>form sederhana</title>
</head>
<body>
<h2> KONSER AMAL ASSALAM BAHAGIA
</h2>
<hr>
    <form method="POST" action="profil.php">
    <table>
    <tr>
    <td>Nama pemesan</td>
    <td>:</td>
    <td><input type="text" name="namapemesan"></td>
    </tr>
    <tr><td>kode studio</td>
    <td>:</td>
    <td>
    <select name="kodestudio" value="kodestudio">
    <option >STUDIO 1 </option>
    <option >STUDIO 2 </option>
    </select></td>
    </td>
    </tr>
    <tr><td>jenis kelamin</td>
    <td>:</td>
    <td><input type="radio" name= "jeniskelas" value="VIP">VIP</input>
    <input type="radio" name= "jeniskelas" value="FESTIVAL">FESTIVAl</input>
    </td>
    </tr>
    <tr>
    <td>Jumlah tiket</td>
    <td> :</td>
    <td><input type="text" name= "jumlahtiket"></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="submit" value="tampil">
    <input type="reset" name="batal" value="batal"></td>
    </tr>
    </table>
    </form>
</body>
</html>
