<?php
require 'sambung.php' ;
require 'keselamatan.php' ;
include 'header.php';
//DAPATKAN ID SUBJEK
$subjek_pilihan = $_GET['idsubjek'];
$guru = $_SESSION['idpengguna'];
//SAMBUNG KE TABLE
$result = mysqli_query($hubung,"SELECT * FROM subjek
WHERE idsubjek ='$subjek_pilihan'");
while($res=mysqli_fetch_array($result))
{
	$paparsubjek = $res['subjek'];
}
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body>
<center>
<h2>SENARAI TOPIK : SUBJEK <?php echo $paparsubjek; ?></h2>
</center>
<main>
<table width="70%" boarder="0"  align="center" style='font-size:16px' >

<tr>
<td width="2%" ><b> Bil.</b></td>
<td width="40%" ><b>Topik</b></td>
<td width="13%" ><b>Tambah Soalan</b></td>
<td width="2%" ><b>Soalan</b></td>
<td width="13%"> <b>Topik</b></td>
</tr>

<?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM topik WHERE
idsubjek='$subjek_pilihan' AND idpengguna='$guru'");
while ($info1=mysqli_fetch_array($data1))
{
	?>
	<tr>
	<td><?php echo $no;?> </td>
	<td><?php echo $info1['topik']; ?></td>
	<td><a href="soalan_baru1.php?idtopik=
	<?php echo $info1 ['idtopik'];?> " ><button>MCQ/TF 
	</button></a>
	<a href = "soalan__baru2.php?idtopik =<?php echo
	$info1['idtopik']; ?>"> <button>FIB</button> </a>
	</td>
	<td><a href="papar_soalan.php? idtopik=
	<?php echo $info1['idtopik']; ?>" ><button>PAPAR
	</button></a>
	</td>
	<td>
	<a href ="edit_topik.php ?idtopik=<?php echo
	$info1['idtopik'];?>" > <button>EDIT</button></a>
	<a href="hapus_topik.php?idtopik=<?php echo 
	$info1['idtopik'];?>"><button>HAPUS</button></a>
	</td>
	</tr>
<?php $no++;} ?>
</table>
</main>
<center><font style='font-size:14px'>
* Senarai Tamat *<br/> Jumlah Rekod:<? php echo $no-1; ?>
</font></center>
</body>
</html>

	
	