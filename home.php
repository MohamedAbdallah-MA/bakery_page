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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
</head>
<body id="body" >
        
    <div class="home" id="hc">
         <div class="nav">
        <div class="navImg">
            <img src="images/bakery-light-1.png" alt="">
        </div>
        <div class="navContent">
            <ul>
                <li class="navlist"> <a href="#hc">Home</a> </li>
                <li class="navlist"> <a href="#au">About</a> </li>
                <li class="navlist"> <a href="#os">Our products</a> </li>
                <li class="navlist"> <a href="#cu">Contact</a> </li>
                <?php if($auth["status"]) { ?>
                <li class="navlist"> <a href="lib.php?logout=1"><span>Logout</span></a></li> 
                <li class="navlist"> <a href="#"><span><?php echo $auth["user"]["name"]; ?></span></a></li>
                <?php 
                }
                else { ?> 
                <li class="navlist"> <a href="login.php">Login</a> </li> 
                <li class="navlist"> <a href="Register.php">Register</a> </li>
                <?php } ?>
                <div class="clr"></div>
            </ul>
        </div>
        <div class="clr"></div>
    
    </div>
        <div class="homeContent">
            <p class="phead">Welcome to</p>
            <h1>Family Bakery</h1>
            <p class="home-description">We're the biggest, best equipped and most advanced Bakery in the greater Los Angeles area.</p>
            <div class="homebtn"></div>
            <div class="cbtn1"> 
                <a href="#au"><button class="btn1">Learn More</button></a>
            </div>
            <div class="cbtn2">
                <a href="#cu"><button class="btn2">contact us</button></a>
            </div>
            
        </div>
    </div>

    <div class="aboutus" id="au">
        <div class="aboutimg"><img src="images/alexandru-stavrica-170390-800x760.jpg" alt=""></div>
        <div class="aboutContent">
            <h2>Who we are ?</h2>
            <p>We have been operating for over 30 years and are Members of The Federation of Master Builders. We work on projects big and small from small residential extensions to full house. We are so happy with this theme. Everyday it make our lives better.</p>
            <ul>
                <li class="aboutlist" >We care about environment</li>
                <li class="aboutlist" >We are trusted by hundreds of clients.</li>
                <li class="aboutlist" >Social media loves us!</li>
                <li class="aboutlist" >This list is super easy to create.</li>
            </ul>
        </div>
    </div>
   
    <div class="clr"></div>

    <div class="location">
        <div class="locationimg">
            <img src="images/full-2-800x640.jpg" alt="">
        </div>
        <div class="locationContent">
            <h2>Our Loction</h2>
            <p>We have been operating for over 30 years and are Members of The Federation of Master Builders. We work on projects big and small from small residential extensions to full house. We are so happy with this theme. Everyday it make our lives better.</p>
            <p>Story on projects big and small from small residential extensions to full house. We are so happy with this theme. Everyday it make our lives better.</p>
        </div>
        <div class="clr"></div>
    </div>

    <div class="shop" id="os">
        <div class="shopdescription">
            <h3> Our Baking</h3>
            <p>Learn more about them. We have worked truly hard to make them perfect for every use.</p>
        </div>
        <div class="products">
            <div class="productcon">
                <div class="product">
                    <img src="images/ben-garratt-134774-600x500.jpg" alt="">
                    <h4>Superior Bread</h4>
                    <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                </div>
            </div>
            <div class="productcon">
                <div class="product">
                    <img src="images/stas-ovsky-123540-600x500.jpg" alt="">
                    <h4>Bagels</h4>
                    <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                </div>
            </div>
            <div class="productcon">
                <div class="product">
                    <img src="images/clem-onojeghuo-206832-600x500.jpg" alt="">
                    <h4>cookies</h4>
                    <p>Proin interdum, ante ut sollicitudin commodo, tellus quam sagittis libero, at semper mauris velit a velit. Phasellus commodo turpis et lacinia posuere.</p>
                </div>
            </div>
            
            <div class="clr"></div>
        </div>
    </div>
    <div class="contact" id="cu">
        <div class="contactimg"><img src="images/Map.png" alt=""></div>
        <div class="contactinfo">
            <h2>Contact Information</h2>
            <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <p>Our contact details:</p>
            <ul>
                <li class="contactlist">Manchester St 123-78B, Random 713, UK</li>
                <li class="contactlist">+46 123 456 789                </li>
                <li class="contactlist">+37 431 456 789</li>
                <li class="contactlist">hello@sitename.com</li>
                
            </ul>
            <h4>share our page</h4>
            <p id="link" ></p>
            <h4 id="print" onclick="printpage()" > to print this page click me</h4>
            
        </div>
        <div class="clr"></div>
        <div class="coordinates">
            <p id="coordinates"></p>
        </div>
    </div>
    <script>
        document.getElementById("link").innerHTML = 
"The full URL of this page is:<br>" + window.location.href;

        function printpage () {
            window.print() ;
        }

        document.getElementById("body").addEventListener("mousemove", function(event) {
  myFunction(event);
});

function myFunction(e) {
  var x = e.clientX;
  var y = e.clientY;
  var coor = "Coordinates: (" + x + "," + y + ")";
  document.getElementById("coordinates").innerHTML = coor;
}

let stars = document.getElementById('stars') ;
let moon = document.getElementById('moon') ;
let mountains3 = document.getElementById('mountains3') ;
let mountains4 = document.getElementById('mountains4') ;
let boat = document.getElementById('boat') ;
let river = document.getElementById('river') ;
let mountains7 = document.getElementById('mountains7') ;

window.onscroll = function() {
    let value = scrollY ;
    stars.style.left = value + 'px' ;
    moon.style.top = value * 7 + 'px' ;
    mountains3.style.top = value * 2 + 'px' ;
    mountains4.style.top = value * 1.5 + 'px' ;
    river.style.top = value + 'px' ;
    boat.style.top = value + 'px' ;
    boat.style.left = value *3 + 'px' ;

    
}
    </script>
</body>
</html>















































<!-- 
    if ( scrollY >= 67 )
    {
        document.querySelector('.moondiv').style.background = 'linear-gradient( #0d3958 , #10001f);'
    }
    else{
        
        document.querySelector('.moondiv').style.background = 'linear-gradient(#200016 , #10001f);'
    }
 -->