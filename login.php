<?php
session_start();
if(isset($_SESSION['username']))
{
    $_SESSION['username'] = $_SERVER['REQUEST_URI'];
    $_SESSION['username'] = true;
    header("Location:home.php");
    exit;
}

include("config.php");  
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password']; //Check input password
    $select = "SELECT * FROM admin WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($koneksi, $select); 

    if(mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_array($result); 
        $name = $row['username'];
        $_SESSION['username'] = $username; 
        header('location:home.php');
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login.css" />
  <title>Login Form</title>
</head>
<body>


<div class="container">
  <div class="judul">
    <p>Login</p>
  </div>

  <form method="POST" action="">
    <input type="text" name="username" id="username" placeholder="Username" />
    <br>
    <input type="password" name="password" id="password" placeholder="Password" />
    <br>
    <input type="submit" name="login" value="Login" />
  </form>
</div>
</body>
</html>
