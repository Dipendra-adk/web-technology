<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
if(isset($_GET['submit'])){
    $email2 = $_GET['email2'];
    $emailRegex = "/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
    if(preg_match($emailRegex, $email2)){
        echo "valid; Signup completed; insert to db";
    }
    else
    {
        echo "Invalid Email2";
    }
 }
   ?>
    <form action="" method="get" onsubmit="return validateForm()">
        <div>
            Signup
        </div>
        <div>UserName: <input type="text" name="un" id="un" required minlength="6"></div>
        <div>Password: <input type="password" name="pw" id="pw"/></div>
        <div>Email1(HTML5 validation): <input type="email" name="email1" id="email1" required></div>
        <div>Email2(JS validation): <input type="text" name="email2" id="email2" required></div>
        <div id="erroremail2"></div>
        <div><input type="submit" value="signup" name="submit"></div>

    </form>
    <script>
        function validateForm(){
            var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
            var email2 = document.getElementById('email2').value
            if(emailRegex.test(email2)){
                return true;
            } else {
                document.getElementById("erroremail2").innerHTML = "Invalid email";
                return false;
            }
            
        }
    </script>
    
</body>
</html>

<!-- assignment 
comparisson between c and js and php
-variables and datatypes
-keywords
-operators 
-conditions or flow control
-comments -->