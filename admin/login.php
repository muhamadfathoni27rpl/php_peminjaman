<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);
 
$db=mysqli_connect("localhost","root","","mysite");
$user = mysqli_query($db,"SELECT * FROM users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:/index.php");
}else
{
    header("location:login.php");
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



