<?php
include "koneksi.php";
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto; //dmYHis iku waktu : upload
$tempatfoto = "../gambar/".$fotobaru;
if(move_uploaded_file($tmp, $tempatfoto)){ // cek gambar upload
	$query = "INSERT INTO barang VALUES('', '".$nama."', '".$stok."','".$fotobaru."')";
	$sql = mysqli_query($connect, $query);

	if($sql){header("location: index.php");}
	else{
		echo "Server ERROR";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
