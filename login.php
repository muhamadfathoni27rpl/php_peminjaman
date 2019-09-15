<?php
session_start();
require('./user/koneksi.php');
    if (isset($_POST["login_btn"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
        if($username == "admin_ganteng" && $password="ganteng"){
          header("Location: ./admin/index.php");
        }
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                    $_SESSION["login"] = true;
                header ("Location: ./user/index.php");
                exit;
            }
        }
        $error = true;
    }
?>
<form method="post" action="">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Inventaris</title> 
    <link rel="stylesheet" href="./css/login.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
    <div class="textbox">
       <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
          <div class="textbox">
            <i class="fas fa-lock"></i>        
              <input type="password" name="password" placeholder="Password">        
          </div>
        <input type="submit" name="login_btn" class="btn btn2" value="Masuk"/>
      <br>
      <p>Belum Punya akun ? <a href="register.php" class="daftar">Daftar</a> </p>
    </form>
    </div>
  </body>
</html>