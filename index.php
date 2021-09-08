<?php
//SAMBUNG KE P.DATA
require 'sambung.php' ;
//PANGGILAN HEADER
include 'header.php' ;
?>

<html>
<body>

<header><?php include 'menu1.php' ?>

<p>
  <h1 class="sr-only">Welcome to GitHub! Let's begin the adventure</h1>;
      <typing-effect> data-lines='["Welcome to GitHub!", "Let’s begin the adventure"]'
        data-continue-to="email-container"
        class="js-signup-typed-welcome"
      >
<center><font size= "5" face= "sans-serif" color= "black">
<?php echo $motto2;?> </font>
<marquee width="65%" direction="left" height="50px">
PELBAGAI JENIS SUBJEK / TOPIK UNTUK RAMAI GURU PELBAGAI FORMAT
</marquee>
</center></p></header>


<td width='50%'> <marquee behavior="alternate"
direction="left">
SOALAN TERKINI</marquee>

<?php include'soalan_terkini.php' ?>
</td></tr></table>
<p></p><p><?php include 'footer.php';?></p>
</body>
</html>