<?php
session_start();
    $user = $_POST["username"];

    $email = $_POST["email"];
    require 'email.php';

    $password = $_POST["pass"];
    $password = password_hash($password, PASSWORD_DEFAULT);  
    $number = $_POST["contact"];

    include('connection.php');


    $query = "select username from registration where username = '".$user."'";

    $result = mysqli_query($connection,$query);
    $ans = mysqli_num_rows($result);

    if($ans>0)
    {
        echo "Username already exists";
        header("Location: register.php");
    }
    else
    {        
        $query = "insert into registration values('".$user."','".$email."','".$password."','".$number."')";
        $result = mysqli_query($connection,$query) or die("Not working");   

        header("Location: otp.php");
    }


?>