<?php
include('koneksi.php');
$query = "SELECT * FROM barang ORDER BY id ASC";
$hasil= mysqli_query($koneksi, $query) OR die(mysql_error());
$data = mysqli_fetch_assoc($hasil);
?>
<html>
<head>
	<title>ISI DATA</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../css/bootstrrap.min.css" />
<link type="text/css" rel="stylesheet" href="../css/pesan.css" />
</head> 
<body>
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						<h1>Masukan Data</h1>
						</div>
						<form method="post" action="dataformulir.php"enctype="multipart/form-data">							
					<div class="form-group">
						<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Anda" required>
						<span class="form-label">Nama</span>
					</div>		   
					<input type="hidden" name="id_barang" value="<?php echo $_GET['id']; ?>">           
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">										
										<select class="form-control" name="kelas" required>
											<option value="X RPL1">X RPL 1</option>
											<option value="X RPL2">X RPL 2</option>
											<option value="X RPL3">X RPL 3</option>
											<option value="X RPL4">X RPL 4</option>
											<option value="X RPL5">X RPL 5</option>
											<option value="X RPL6">X RPL 6</option>
											<option value="X RPL7">X RPL 7</option>
											<option value="X TKJ1">X TKJ 1</option>
											<option value="X TKJ2">X TKJ 2</option>
											<option value="X TKJ3">X TKJ 3</option>
											<option value="X TKJ4">X TKJ 4</option>
											<option value="X TKJ5">X TKJ 5</option>
											<option value="X TKJ6">X TKJ 6</option>
											</select>
										<span class="select-arrow"></span>
										<span class="form-label">Kelas</span>
							</div>
						</div>
					</div>
					<div class="row">		
					<div class="col-md-6">
						<div class="form-group">
							<input class="form-control" type="number" name="jumlah" placeholder="Jumlah barang" required>
							<span class="form-label">Jumlah</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="date" name="tglmbalek" class="form-control" required>
								<span class="form-label">Tanggal Kembali</span>
							</div>
						</div>
					</div>
	<hr>
	<div class="form-btn">
	<input class="submit-btn" type="submit" name="beres" value="Pinjam">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
	
	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>
</html>
