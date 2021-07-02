<?php
if(isset($_POST['+'])){
    session_start();
    $user = $_SESSION["username"]; //carrying data of logged in user only 
    $cat = $_POST["category"];  //fetching the selected category 
    $price = $_POST["price"]; //fetching the selected price
    $date = $_POST["date"]; // fetching the selected date  
    $conn = mysqli_connect("localhost","root","","project") or die("database connectivity error");
    $ans = "select * from category";
    $result = mysqli_query($conn,$ans);
    $id = mysqli_num_rows($result);
    date_default_timezone_set('Asia/Kolkata');
    $date1 = date("Y-m-d" );  //accessing system date in a particular format
    if($cat!='other'){    //if selected category is not 'other'
        if(empty($date)){  // is the user left the date as empty
            $sql = "select * from category where category = '".$cat."' and date = '$date1'";  //check whether the same entry exists for the inputed date
            $result1 = mysqli_query($conn,$sql);
            $ans1 = mysqli_num_rows($result1);   //count the number of rows of the result
            $row = mysqli_fetch_assoc($result1);
            if($ans1>0){  // if there will be an entry $ans will definitely be greater than 0
                $sql1 = "update category set price = price + $price where id = '".$row['id']."'";   //query written to update the price
                $result2 = mysqli_query($conn,$sql1);
                header('Location:add_category.php'); //after doing redirect to same page beacuse if user wants to add more information
            }else{
                $sql3 = "insert into category values($id + 1,'".$user."','$date1','".$cat."','".$price."')";
                $result = mysqli_query($conn,$sql3);
                
                header('Location:add_category.php');
                
            }
        }else{
            $sql = "select * from category where category = '".$cat."' and date = '$date'";
            $result1 = mysqli_query($conn,$sql);
            $ans1 = mysqli_num_rows($result1);
            $row = mysqli_fetch_assoc($result1);
            if($ans1>0){
                $sql1 = "update category set price = price + $price where id = '".$row['id']."'";
                $result2 = mysqli_query($conn,$sql1);
                header('Location:add_category.php');
            }else{
                $sql3 = "insert into category values($id + 1,'".$user."','$date','".$cat."','".$price."')";
                $result = mysqli_query($conn,$sql3);
                header('Location:add_category.php');
            }
        }
    }else{
        $choice = $_POST["choice"];
        if(empty($date)){
            $sql = "select * from category where category = '".$choice."' and date = '$date1'";
            $result1 = mysqli_query($conn,$sql);
            $ans1 = mysqli_num_rows($result1);
            $row = mysqli_fetch_assoc($result1);
            if($ans1>0){
                $sql1 = "update category set price = price + $price where id = '".$row['id']."'";
                $result2 = mysqli_query($conn,$sql1);
                header('Location:add_category.php');
            }else{
                $sql3 = "insert into category values($id + 1,'".$user."','$date1','".$choice."','".$price."')";
                $result = mysqli_query($conn,$sql3);
                header('Location:add_category.php');
            }
        }else{
            $sql = "select * from category where category = '".$choice."' and date = '$date'";
            $result1 = mysqli_query($conn,$sql);
            $ans1 = mysqli_num_rows($result1);
            $row = mysqli_fetch_assoc($result1);
            if($ans1>0){
                $sql1 = "update category set price = price + $price where id = '".$row['id']."'";
                $result2 = mysqli_query($conn,$sql1);
                header('Location:add_category.php');
            }else{
                $sql3 = "insert into category values($id + 1,'".$user."','$date','".$choice."','".$price."')";
                $result = mysqli_query($conn,$sql3);
                header('Location:add_category.php');
            }
        }
    }
}  

?>
<!-- <html>
    <head>
        <h1>Your choices has been added<h1>
    </head>
</html> -->
