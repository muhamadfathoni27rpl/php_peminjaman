<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
$queryhapos = "DELETE FROM penjualan WHERE id ='".$id."'";
$sql2 = mysqli_query($connect, $queryhapos);
if($sql2){header("location: peminjam.php");
}else{echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";}
?>
