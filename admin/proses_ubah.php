<?php
include "koneksi.php";
// njupuk tekan URL
$id = $_GET['id'];
//njupuk tekan form
$nama = $_POST['nama'];
$stok = $_POST['stok'];

// nge cek user kate ubah foto ta gak
if(isset($_POST['ubah_foto'])){ //cekbox : oke
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	//set nggen + waktu ne
	$fotobaru = date('dmYHis').$foto;
	$tempatfoto = "../gambar/".$fotobaru;

	if(move_uploaded_file($tmp, $tempatfoto)){
		$query = "SELECT * FROM barang WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($sql);

		// ngecek foto ne ng folder
		if(is_file("../gambar/".$data['foto']))
			unlink("../gambar/".$data['foto']);

		$query = "UPDATE barang SET nama='".$nama."', stok='".$stok."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query);
		if($sql){header("location: index.php");}
		else{
			echo "Terjadi kesalahan bos que";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	$query = "UPDATE barang SET nama='".$nama."', stok='".$stok."' WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);
	if($sql){header("location: index.php");}
	else{
		echo "Maaf , Terjadi Kesalahan";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
