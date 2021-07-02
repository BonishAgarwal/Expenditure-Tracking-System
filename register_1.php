<?php
session_start();
    $user = $_POST["username"];
    echo $user;
    $email = $_POST["email"];
    require 'email.php';
    $password = $_POST["pass"];
    // $c_password = $_POST["c_pass"];
    $number = $_POST["contact"];
    $connection = mysqli_connect("localhost","root","","project") or die("hi");
    // $query = "insert into registration values('".$user."','".$email."','".$password."','".$number."')";
    // $result = mysqli_query($connection,$query) or die("not working");
    $query = "select username from registration where username = '".$user."'";

    $result = mysqli_query($connection,$query);
    $ans = mysqli_num_rows($result);
    // echo $ans;
    if($ans>0){
        echo "username already exists";
        // header("Location: home.php");
        header("Location: register.php");
    }else{
        $query = "insert into registration values('".$user."','".$email."','".$password."','".$number."')";
        $result = mysqli_query($connection,$query) or die("not working");   
        // header("Location: expenditure.php");
        header("Location: otp.php");
    }


?>