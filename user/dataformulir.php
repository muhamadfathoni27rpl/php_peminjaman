<?php
include('koneksi.php');
$query = "SELECT * FROM barang ORDER BY id ASC";
$hasil= mysqli_query($koneksi, $query) OR die(mysql_error());
$data = mysqli_fetch_assoc($hasil);
$nama = $_POST['nama'];
$id_barang =  $data['id'];
$stok = $_POST['jumlah'];
$kelas = $_POST['kelas'];
$tglnyilih = date("Y-m-d H:i:s");
$tglmbalek = $_POST['tglmbalek'];
$query = "INSERT INTO penjualan VALUES('0' ,'$id_barang','$nama','$kelas', '$stok','$tglnyilih','$tglmbalek')";
	$sql = mysqli_query($koneksi, $query);

	if($sql){header("location: generate.php");}
	else{
		echo "Server ERROR";
		echo "<br><a href='formulir.php'>Kembali Ke Form</a>";
	}
?>


