<?php
session_start();
require 'config.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['email'])){
    header('Location: home.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <script src="https://kit.fontawesome.com/3273513e94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">

    <form action="" method="post">
        <h3>Register here</h3>
        <?php include('errors.php'); ?>

        <div class="input-group">
<!--            <i class="fa-solid fa-user"></i>-->
            <input type="text" name="username" placeholder="Enter your name" required>
        </div>
        <div class="input-group">
<!--            <i class="fa-solid fa-envelope"></i>-->
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
<!--            <i class="fa-solid fa-lock"></i>-->
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-group">
<!--            <i class="fa-solid fa-lock"></i>-->
            <input type="password" name="c_password" placeholder="Confirm your password" required>
        </div>
<!--        <input type="checkbox" onclick="myFunction()">Show Password-->
        <div class="input-group">
            <input type="submit" name="submit" value="Register" class="btn">
        </div>
        <p>Already have an account?<a href="login.php">Login</a></p>

    </form>
</div>


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
            <h3>USEFUL LINKS</h3>
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
        <p class="copy-rights">&copy2022 Femiluxe Salon</p>
    </div>
</div>
<!--javascript link-->
<script src="script.js"></script>
</body>
</html>
