<?php
if(isset($_POST["submit"])){
    session_start();
    $_SESSION["username"] = $_POST["Username"];
    $password = $_POST["Pass"];
    $connection = mysqli_connect("localhost","root","","project");
    $query = "select * from registration where username = '".$_SESSION["username"]."' && password = '".$password."'";
    $result = mysqli_query($connection,$query) or die("not working");
    $ans = mysqli_num_rows($result);
    if($ans!=0){
        // header("Location :home.php");
        // echo "<script> window.location = 'expenditure.php'; </script>";
        // echo "<script> window.location = 'show.php'; </script>";
        // echo "<script> window.location = 'realone.html'; </script>";
        echo "<script> window.location = 'theme.php'; </script>";
    }else{
        // header("Location : login.php");
        // echo "<script> window.location = 'login.php'; </script>";
        echo "<script> alert('wrong input username or password'); </script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAnimated Login Form</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

<form autocomplete = "off" class="box" action="login.php" method="post">
  <h1>Login</h1>
  <input type="text" name="Username" placeholder="Username">
  <input type="password" name="Pass" placeholder="Password">
  <input type="submit" name="submit" value="Login"><p><b>Not a user ?</b> <a href = "register.php">Register here</a></p>
  <p><a href = "mailforget (1).html">Forgot Password ?</a><p>
</form>


  </body>
</html>
