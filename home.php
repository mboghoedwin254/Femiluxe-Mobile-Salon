<?php
session_start();
require 'config.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--navbar starts here-->
<nav class="navbar">
    <div class="container-logo">
        <h2>Femiluxe Mobile Salon</h2>

    </div>
    <div class="nav-links">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
<!--            <li><a href="home.php">BOOKING</a></li>-->
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact-us.php">CONTACTS</a></li>
        </ul>
    </div>
    <div class="login-btn">
        <ul>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="login.php">LOGOUT</a></li>
        </ul>
    </div>

</nav>
<!--navbar ends here-->
<div class="row">
    <div class="column">
        <div class="content">
            <img src="salon-images/salon1.jpg" alt="" style="width:100%">
            <h3>Style No.1<span>Price: Kes 1000</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon2.jpg" alt="" style="width:100%">
            <h3>Style No.2<span>Price: Kes 1200</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon5.jpg" alt="" style="width:100%">
            <h3>Style No.3<span>Price: Kes 900</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon4.jpg" alt="" style="width:100%">
            <h3>Style No.4<span>Price: Kes 700</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon17.jpg" alt="" style="width:100%">
            <h3>Style No.5<span>Price: Kes 850</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon16.jpg" alt="" style="width:100%">
            <h3>Style No.6<span>Price: Kes 1100</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon19.jpg" alt="" style="width:100%">
            <h3>Style No.7<span>Price: Kes 900</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/salon15.jpg" alt="" style="width:100%">
            <h3>Style No.8 <span>Price: Kes 800</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <!-- END GRID -->
</div>

<h2 id="shave-styles">Shaving Styles</h2>

<div class="row">
    <div class="column">
        <div class="content">
            <img src="salon-images/shave1.jpeg" alt="" style="width:100%">
            <h3>Style No.1<span>Price: Kes 1000</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave2.jpg" alt="" style="width:100%">
            <h3>Style No.2<span>Price: Kes 1200</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave3.jpg" alt="" style="width:100%">
            <h3>Style No.3<span>Price: Kes 900</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave4.jpg" alt="" style="width:100%">
            <h3>Style No.4<span>Price: Kes 700</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave5.jpeg" alt="" style="width:100%">
            <h3>Style No.5<span>Price: Kes 850</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave6.jpeg" alt="" style="width:100%">
            <h3>Style No.6<span>Price: Kes 1100</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave7.jpeg" alt="" style="width:100%">
            <h3>Style No.7<span>Price: Kes 900</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>
    <div class="column">
        <div class="content">
            <img src="salon-images/shave8.jpeg" alt="" style="width:100%">
            <h3>Style No.8 <span>Price: Kes 800</span></h3>
            <p><a href="booking.php">BOOKING</a></p>
        </div>
    </div>

    <!-- END GRID -->
</div>


<!--footer starts here-->
<div class="footer">
    <div class="row-footer">
        <div class="column-footer-items">
            <h3>OPENING HOURS</h3>
            <p>WEEKDAYS: 7AM-7PM</p>
            <p>WEEKENDS: 9AM-7PM</p>
        </div>
        <div class="column-footer-items">
            <h3>LOCATION</h3>
            <p>We are located at Nakuru Biashara Centre,<br> Plot no.54</p>
        </div>
        <div class="column-footer-items">
            <h3>MENU</h3>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="contact-us.php">CONTACTS</a></li>
            </ul>
        </div>
        <div class="column-footer-items">
            <h3>CONTACTS</h3>
            <p><b>PHONE</b>: 0790125866</p>
            <p><b>EMAIL</b>:mboghoedwin9@gmail.com</p>
            <ul class="social-links">
                <li><a href="https://www.facebook.com"><img src="icons/icons8-facebook-30%20(1).png"></a></li>
                <li><a href="https://www.instagram.com"><img src="icons/icons8-instagram-30.png" alt=""></a></li>
                <li><a href="https://twitter.com"><img src="icons/icons8-twitter-30.png" alt=""></a></li>
                <li><a href="https://www.youtube.com"><img src="" alt=""></a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div>
        <p class="copy-rights">&copy2022 Flemiluxe Salon</p>
    </div>
</div>
<!--footer ends here-->
<!--javascript link-->
<script src="script.js"></script>
</body>
</html>
