<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_style.css">
    <title>Document</title>
</head>
<body>
    <div class="loginhome">
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
        <div class="logincontainer">
            <div class="loginhead">
                <h1> Login </h1>
                <div class="loginhcontent">
                    <span>don't have an account ? </span> <a href="Register.php">Register</a>
                </div>
            </div>
            <div class="loginform">
                <form action="lib.php" method="post" name="loginform">
                    <div class="formgroup">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="formgroup">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="sl">
                        <input type="checkbox" name="Stay_Login">
                        <span> stay login </span>
                    </div>
                    <div class="rs">
                        <input type="submit" name="login" onclick =" checkfill ()">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <script>
            function checkfill () 
            {
                var empt = document.forms["loginform"]["email"].value;
                var empt2 = document.forms["loginform"]["password"].value;
                if (empt == "" || empt2 == "" )
                {
                window.alert("Please , fill all feilds ");
                
                }
                
            }
        </script>
</body>
</html>