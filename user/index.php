<?
session_start();
if(!isset($_GET['username'])){
  header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventaris MOKLET</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" >Inventaris Moklet</a>
            </div>            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div >        
    </nav>
  <h1 style=" margin:10px;">-----------------</h1>  
  <h1 style="text-align:center; margin:10px;">~Daftar Barang~</h1>  
  <div class="container"> 
  <?php
			$db=mysqli_connect("localhost","root","","mysite");
				$query = "SELECT * FROM barang ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="./detail.php?id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#f1f1f1; border-radius:10px; padding:4px;"width="50" height="25" align="center">
						<img src="../gambar/<?php echo $row["foto"]; ?>" class="img-responsive" /><br />
						<h4 class="text-info"><?php echo $row["nama"]; ?></h4>
						<h4 class="text-danger">Stok tersisa : <strong> <?php echo $row["stok"]; ?></strong></h4>					
						<input type="hidden" name="nama" value="<?php echo $row["nama"]; ?>" />
						<input type="hidden" name="stok" value="<?php echo $row["stok"]; ?>" />
						<input type="submit" name="pesan" style="margin-top:5px;" class="btn btn-success" value="Lihat Barang" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
  </table>
</body>
</html>