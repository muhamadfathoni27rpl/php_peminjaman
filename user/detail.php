<?php
// Jika tidak diakses lewat link URL yang memiliki id
if(!isset($_GET['id']))
  header("Location: /index.php");
$db=mysqli_connect("localhost","root","","mysite");
$query  = "SELECT * FROM barang WHERE id = ". $_GET['id'];
$hasil = mysqli_query($db, $query);

// lanek Gk ono data
if($hasil->num_rows == 0)
  header("Location: ./index.php"); //mbalek ng index
$data = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Barang</title>
    <link rel="stylesheet" href="../css/detail.css">
  </head>
  <body>
<div class="card">
  <div class="top-section">
    
    <div class="nav"><img src="../gambar/<?php echo $data['foto']; ?>">
    </div>
  <div class="product-info">
    <div class="name"><?= $data['nama']; ?></div>
    <div class="dis">STOK Tersisa <?= $data['stok']; ?></div>
    <a type="submit" class="btn" href="<?= 'formulir.php?id='. $data['id'] ?>">Pesan</a>
    <a class="btn" href="javascript:window.history.back();">Kembali</a>
  </div>
</div>
  <script type="text/javascript">
    var container = document.getElementById("image-container");
    function change_img(image) {
      container.src = image.src;
    }
  </script>
  </body>
</html>
