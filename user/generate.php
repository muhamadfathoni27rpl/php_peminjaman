<?php
$db=mysqli_connect("localhost","root","","mysite");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Selesai </title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<div class="container">			
                 <div class="table-responsive">
                 <div class="title"><h3 align="center">Peminjaman Selesai</h3></div>
                 <div class="hero-unit"><h3 align="center">Selamat Anda telah berhasil checkout</h3></div>
                 <div class="hero-unit">
			 <?php 
		if(isset($_POST['beres']))	{
			echo '<h4>Terima kasih Anda sudah meminjam alat di SMK Negeri 1 Dlanggu.</h4>';
			echo '<p>Nama  : '.$_POST['nama'].'<br>';
			
			echo '<p>Tanggal Pinjam : '.$_POST['tglnyilih'].'<br>';
			}session_destroy();
			echo '<a href="javascript:window.print()"><h3>Cetak</h3></a></font>';
			echo "<a href='../logout.php'>Keluar</a>";
		  ?>
            </div>			
		</div>		
	</div>	
</body>
</html>