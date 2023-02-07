<?php
    $page="LOGIN";
    require("lib.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reg_style.css">
</head>
<body>
    <div class="registerhome">

        <div class="nav">
            <div class="navImg">
                <img src="images/bakery-light-1.png" alt="">
            </div>
            <div class="navContent">
                <ul>
                    <li class="navlist"> <a href="home.php">Home</a> </li>
                    <li class="navlist"> <a href="login.php">login</a> </li> 
                    <li class="navlist"> <a href="Register.php">Register</a> </li>
                    <div class="clr"></div>
                </ul>
            </div>
            <div class="clr"></div>
        
        </div>
        <div class="registercontainer">
            <div class="registerhead">
                <h1> Register </h1>
                <div class="registerhcontent">
                    <span>have an account ? </span> <a href="login.php">Login</a>
                </div>
                
            </div>
            <div class="registerform">
                <form action="lib.php" method="POST" name="registerform">
                    <div class="formgroup">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="formgroup">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="formgroup">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="rs">
                        <input type="submit" name="register" onclick="checkfill ()">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <script>
            function checkfill () 
            {
                var empt = document.forms["registerform"]["email"].value;
                var empt1 = document.forms["registerform"]["name"].value;
                var empt2 = document.forms["registerform"]["password"].value;
                if (empt == "" || empt1 == "" || empt2 == "")
                {
                window.alert("Please , fill all feilds ");
                
                }
                
            }
        </script>
</body>
</html>