<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>
<?php
//QUERY SOALAN
(idperekodan, idpengguna, idtopik, jenis, skor, catatan_masa)
$query="INSERT INTO perekodan
values (NULL, '$_SESSION[idpengguna]', '$_SESSION
(pilih_topik]', '$_SESSION(jenis_soalan]', '$_SESSION
[score]',NULL)";
$insert_row=mysqli_query($hubung, $query);
?>

<html>
<body>
<center><h2>SOALAN TAMAT</h2></center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<p>Tahniah! Anda telah selesai menjawab semua soalan</p>
<p>Bilangan Betul: <?php echo $_SESSION[ 'score'); ?></p>
</td>
</tr>
<tr>
<td>
<button onclick="window.location.href='soalan_papar.php?
n=1'">Cuba Lagi</button>
<button onclick="window.location.href='index2.php'">Tamat
</button>
<button onclick="window.location.href=
skor_individu.php">Prestasi</button>
<?php $_SESSIONI'Score']=0; ?>
</td>
</tr>
</table
<?php include 'footer.php'; ?>
</body>
</html>