<?php
if ($_SESSION['level' ]=="ADMIN"){
	?>
	<!--ADMIN-->
	<center><p>
	<a href="index2.php"><button> Menu </button></a>
	<a href= "subjek_senarai.php"><button> Senarai Subjek </button></a>
	<a href= "guru_senarai.php"><button> Senarai Guru </button>
	</a>
	<a href="pelajar_senarai.php"><button> Senarai pelajar_senarai </button></a>
	<a href= "laporan_satistik.php"><button> Satistik </button>
	</a>
	<a href="logout.php"><button> Log Keluar </button></a>
	</p></br>
	<?php $pengguna="DASHBOARD ADMIN";?>
	</center>
	<?php
}
elseif ($_SESSION['level'] =="GURU"){
	?>
	<!--GURU-->
	<center><p>
	<a href="index2.php"><button> Menu </button></a>
	<a href="pilih_subjek.php"><button> Kuiz </button></a>
	<a href="prestasi_topik.php"><button> Laporan Prestasi </button></a>
	<a href="import_daftar.php"><button> Import </button></a>
	<a href="logout.php"><button> Log Keluar </button></a>
	</p></br>
	<?php $pengguna="DASHBOARD GURU";?>
	</center>
	<?php
}
else{
	?>
	<!-- PELAJAR-->
	<center></br>
	<p>
	<a href= "index2.php"><button> Menu </button></a>
	<a href= "kuiz_subjek.php"><button> Mula Kuiz </button></a>
	<a href= "skor_individu.php"><button> Laporan Prestasi  </button></a>
	<a href="logout.php"><button> Log Keluar </button></a>
	</p>
	</br>
	<?php $pengguna="DASHBOARD PELAJAR";?>
	</center>
	<?php
}
?>

