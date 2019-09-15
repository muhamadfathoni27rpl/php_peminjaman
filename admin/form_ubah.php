<html>
<head>
	<title>Edit barang | Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
	</nav>
	<div class="container" style="margin-top:20px">
	<h1 align="center"><strong>~</strong>Edit Barang<strong>~</strong></h1>	
	<?php
	include "koneksi.php";	
	$id = $_GET['id'];
	$query = "SELECT * FROM barang WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Barang</label>
				<div class="col-sm-10">			
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
		</div>	
	</div>	
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">STOK Barang</label>
				<div class="col-sm-10">			
				<input type="number" name="stok" class="form-control" value="<?php echo $data['stok']; ?>" required>
		</div>	
	</div>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
	</table>
	<hr>
	<input type="submit" value="Ubah" class="btn btn-outline-danger">
	<a href="index.php"><input type="button" value="Batal" class="btn btn-outline-dark"></a>
	</form>
</body>
</html>