<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body>
<center><h2>IMPORT NAMA PELAJAR DARI FAIL CSV</h2>
</center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<label>Kemudahan untuk daftar nama pelajar secara berkelompok</label><br>

<label>Pilih lokasi fail CSV/Excel: </label>
<!-- PANGGIL FAIL IMPORT CSV-->
<form action="import_csv.php" method="post"
name="upload_excel" enctype="multipart/form-data">
<input type="file" name="file" id="file"
class="input-large"><br>
<button type="submit" id="submit" name="import" >Upload
</button>
</center>
</form>
*Cipta fail dalam Ms Excell dan save as csv mengikut
aturan lajur seperti di bawah:
<br><br>

<table width="70%" border="1" align="center" >
<tr>
<td>111213031234</td>
<td>1234</td>
<td>SITI NORHALIZA BINTI SAMAD</td>
<td>PEREMPUAN</td>
</tr>
</table>
</td>
</tr>
</table>
</mains
<?php include 'footer.php'; ?>
</body>
</html>