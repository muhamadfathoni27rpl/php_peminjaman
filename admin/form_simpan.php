
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container"><html>
<head>
	<title>Tambah Barang | Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
	</nav>
	<div class="container" style="margin-top:20px">
		<h1 align="center">Tambah Barang</h1>
		<strong align="center">Inventaris Sarana dan Prasarana </strong>
		<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Barang</label>
				<div class="col-sm-10">			
				<input type="text" name="nama" class="form-control" required>
				</div>	
	</div>
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">STOK Barang</label>
				<div class="col-sm-10">			
				<input type="number" name="stok" class="form-control" required>
				</div>	
	</div>	
	<div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="foto">
    <label class="custom-file-label" for="inputGroupFile01">Gambar Barang</label>
  </div>
	<hr>
	<input type="submit" value="Simpan" class="btn btn-outline-dark">
	<a href="index.php"><input type="button" value="Batal" class="btn btn-outline-secondary"></a>
	</form>
</body>
</html>
