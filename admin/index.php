<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="../css/adminhom.css">
</head>
<body>
<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
</span>
    <ul class="navbar-nav">
      <li><a href="index.php">Barang</a></li>
      <li><a href="peminjam.php">Peminjaman</a></li>      
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
  <?php
	include "koneksi.php";	
	$query = "SELECT * FROM admin WHERE id='1'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="user.php">Daftar User</a>
    <a href="logout.php">Keluar</a>
  </div>
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }
    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
    <div id="main">
			<h1>Selamat Datang Mimin Ganteng</h1>
	<h2>Inventaris Sarpra</h2>	
	<form method="post" action="./form_simpan.php?id=<?php echo $data["id"]; ?>">
	<input type="submit" name="new" style="margin-top:5px;" class="btn btn2" value="Tambah barang" />
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>ID Barang</th>
		<th>Nama</th>
		<th>STOK</th>
		<th colspan="2">OPSI</th>
	</tr>
	<?php
	include "koneksi.php";	
	$query = "SELECT * FROM barang";
	$sql = mysqli_query($connect, $query);
	
	while($data = mysqli_fetch_array($sql)){ // njupuk data 
		echo "<tr>";
		echo "<td><img src='../gambar/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['stok']."</td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	</div>
</body>
</html>
