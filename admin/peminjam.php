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
	<h1>Daftar Peminjam Barang</h1>	
	<table border="1" width="100%">
	<tr>
    <th>id</th>
		<th>nama</th>
		<th>kelas</th>
		<th>jumlah</th>
    <th>Tanggal Pemesanan</th>
    <th>Tanggal Pengembalian</th>
		<th>Aksi</th>
	</tr>
	<?php
	include "koneksi.php";	
	$query = "SELECT * FROM penjualan";
	$sql = mysqli_query($connect, $query);	
	while($data = mysqli_fetch_array($sql)){ // njupuk data 
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['tglnyilih']."</td>";
        echo "<td>".$data['tglmbalek']."</td>";	
		echo "<td><a href='proseshapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	</div>
</body>
</html>
