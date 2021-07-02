<!DOCTYPE html>
<html lang="en" dir="ltr">
<script>
        

        function validations(){
            var a = document.getElementById("name").value;
            var b = document.getElementById("contact").value;
            var c = /^[0-9]+$/;
            var d = document.getElementById("pass").value;
            var h = /^([A-Z a-z]+)@([1-9]+)$/
            var e = document.getElementById("c_pass").value;
            var f = document.getElementById("mail").value.toString();
            var g = /^([A-z a-z 1-9 \. -]+)@([A-Z a-z -]+).([a-z]{2,5}).([a-z]{2,5})$/
            if(a.trim().length < 6){
                document.getElementById("i_1").style.visibility = "visible";
                return false;
        
            }else if(b.length!=10 || c.test(b)==false){
                document.getElementById("i_2").style.visibility = "visible";
                return false;
            }else if(h.test(d)==false){
                document.getElementById("i_3").style.visibility = "visible";
                return false;
            }else if(e!=d){
                document.getElementById("i_4").style.visibility = "visible";

                return false;
            }else if(g.test(f)==false){
                document.getElementById("i_5").style.visibility = "visible";
                return false;
            }else{
                validate()
                function validate(){
                    if (confirm("Press a button!")){
                        location.hash;
                    }else{
                        txt = "You pressed cancel!"
                        return false
            }
            document.getElementById("demo").innerHTML = txt;
        }
        
            }
        
        }
        
        
    </script>
    
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
      <form onsubmit="return validations()" class="" action="register_1.php" method="post" autocomplete = "off">
        <h1>Sign Up</h1>
        <input type="text" placeholder="Username" id = "name" class="txtb" name = "username">
        <label for = "username" id = "i_1" style="color: red;visibility: hidden">Username not valid</label>
        <input type="email" placeholder="Email" class="txtb" id = "mail" name = "email">
        <label for = "email" id = "i_5" style="color: red;visibility:hidden">Wrong email input</label>
        <input type="password" placeholder="Password" class="txtb" id = "pass" name = "pass">
        <label for = "pass" id = "i_3" style="color: red; visibility:hidden">Input as given</label>
        <input type="password" placeholder="Confirm Password" class="txtb" id = "c_pass">
        <label for = "c_pass" id = "i_4" style="color: red;visibility:hidden">Does not match the password</label>
        <input type="text" placeholder="Contact No." class="txtb" id = "contact" name = "contact">
        <label for = "contact" id = "i_2" style="color: red;visibility:hidden">Should be of length 10</label>
        <input type="submit" value="Create Account" class="signup-btn" name="submit">
        <a href="login.php">Already Have one ?</a>
      </form>
    </div>
  </body>
</html>
