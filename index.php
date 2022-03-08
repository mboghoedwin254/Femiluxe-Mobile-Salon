<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Femiluxe Mobile Salon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <div class="container-logo">
        <h2>Femiluxe Mobile Salon</h2>

    </div>
    <div class="nav-links">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
<!--            <li><a href="booking.php">BOOKING</a></li>-->
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

<!--carousel starts here-->
<div class="slideshow-container">

    <div class="mySlides fade">
<!--        <div class="numbertext">1 / 3</div>-->
        <img src="salon-images/carousel1.jpg" style="width:100%">
<!--        <div class="text">Caption Text</div>-->
    </div>

    <div class="mySlides fade">
<!--        <div class="numbertext">2 / 3</div>-->
        <img src="salon-images/carousel2.jpg" style="width:100%">
<!--        <div class="text">Caption Two</div>-->
    </div>

    <div class="mySlides fade">
<!--        <div class="numbertext">3 / 3</div>-->
        <img src="salon-images/carousel3.jpg" style="width:100%">
<!--        <div class="text">Caption Three</div>-->
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!--carousel ends here-->

<h2 id="services">Our Services</h2>
<div class="flex-container">
    <div class="flex-item">
        <h4> Hair Styling</h4>
        <img src="salon-images/service1.jpeg" alt="" style="border-radius: 50%">
    </div>
    <div class="flex-item">
        <h4> Hair Cut styles</h4>
        <img src="salon-images/service2.jpeg" alt="" style="border-radius: 50%">
    </div>
    <div class="flex-item">
        <h4>Pedicure</h4>
        <img src="salon-images/service1.jpeg" alt="" style="border-radius: 50%">
    </div>
</div>

<!--footer style starts here-->
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



<!--javascript link-->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
</body>
</html>
