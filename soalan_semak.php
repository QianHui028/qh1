<?php
require 'sambung.php';
session_start();
$topik_pilihan=$_SESSION['pilih_topik'];
?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION[ 'score'])){
$_SESSION['score'] = 0;
}
//NILAI YANG DI POST
if($_POST) {
$idquestion= $_POST['idsoalan'];
$number = $_POST['number'];
$next=$number+1;
$total=4;

$jenis_soalan=$_POST['jenis_soalan'];
$selected_choice =$_POST['choice'];
$jawapan_taip=trim(strtoupper($_POST['idJAWAPAN']));
//JUMLAH SOALAN
$query="SELECT * FROM soalan where idtopik=$topik_pilihan
AND jenis=$jenis";
$results = mysqli_query($hubung, $query);
$total=mysqli_num_rows($results);
//SEMAK JAWAPAN BAGI SOALAN JENIS MCQ/TF
if($jenis_soalan==1) {
$_SESSION['jenis_soalan']=1;
// Get correct choice
$q = "SELECT * FROM pilihan WHERE nom_soalan=$number AND
jawapan=1 and idsoalan=$idquestion";
mysqli_query($hubung,$q);
$row = mysqli_fetch_assoc($result);
$correct_choice=$row['idpilihan'];
//BANDING JAWAPAN
if($correct_choice == $selected_choice) {
$semakan="TEPAT";
$_SESSION['score']++;
}
}
//SEMAK JAWAPAN BAGI SOALAN JENIS FIB
if(Sienis soalan==2){

//SEMAK JAWAPAN
$q = mysqli_query($hubung, "SELECT * FROM pilihan WHERE
idsoalan='$idquestion' AND nom_soalan = '$number' AND
pilihan_jawapan = '$jawapan_taip'");

$row=mysqli_num_rows($q);

//BANDINGAN
if($row>0){
$semakan="TEPAT";
$_SESSION['score']++;
}
}


if($number $total){
header("Location: soalan_markah.php");
exit();
} else {
header("Location: soalan_papar.php?semakan=
".$semakan."&idtopik=".$topik_pilihan."&n=".$next."&
score=".$_SESSION['score']);

}
}
?>