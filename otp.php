<?php
session_start();


if(isset($_POST["button"])){
    $otp = $_POST["otp2"];
    $otp = (int)$otp;
    echo $otp;
    
    $otp1 = $_SESSION["otp3"];
    echo $otp1;
    if($otp==$otp1){
        header('Location:login.php');
        session_destroy();
    }else{
        header('Location:otp.php');
    }
}
?>




<!DOCTYPE html>
<html>
    <form method = "post">
        <table>
            <tr>
                <td> OTP </td>
                <td><input type = "text" name = "otp2"></td>
                <td><button type = "submit" name = "button">Check</button>
            </tr>
        </table>
    </form>
</html>