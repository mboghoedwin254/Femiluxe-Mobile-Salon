<?php
session_start();
require 'config.php';
require 'insert_user.php';
// LOGIN USER
//if (isset($_POST['login'])) {
//$username = mysqli_real_escape_string($conn, $_POST['username']);
//$password = mysqli_real_escape_string($conn, $_POST['password']);
//
//if (empty($username)) {
//array_push($errors, "Username is required");
//}
//if (empty($password)) {
//array_push($errors, "Password is required");
//}
//
//if (count($errors) == 0) {
//$password = md5($password);
//$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//$results = mysqli_query($conn, $query);
//
//if (mysqli_num_rows($results) == 1) {
//    $_SESSION['success'] = "You are now logged in";
//    $_SESSION['username'] = $username;
//header('location: index.php');
//}else {
//array_push($errors, "Wrong username or password");
//}
//}
//}

if(isset($_POST['email']) && isset($_POST['password'])){

// CHECK IF FIELDS ARE NOT EMPTY
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

// Escape special characters.
        $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));

        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'");

        if(mysqli_num_rows($query) > 0){

            $row = mysqli_fetch_assoc($query);
            $user_db_pass = $row['user_password'];

// VERIFY PASSWORD
            $check_password = password_verify($_POST['password'], $user_db_pass);

            if($check_password === TRUE){

                session_regenerate_id(true);

                $_SESSION['email'] = $email;
                header('Location: home.php');
                exit;

            }
            else{
// INCORRECT PASSWORD
                array_push($errors, "Wrong email or password");

            }

        }
        else{
// EMAIL NOT REGISTERED
            array_push($errors, "Wrong email or password");
        }

    }
    else{

// IF FIELDS ARE EMPTY
        array_push($errors, "Please fill all the required fields");
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <script src="https://kit.fontawesome.com/3273513e94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <?php include('errors.php'); ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h3>Login</h3>

        <div class="input-group">
<!--            <i class="fa-solid fa-user"></i>-->
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
<!--            <i class="fa-solid fa-lock"></i>-->
            <input type="password" name="password" placeholder="Password" required>
        </div>
<!--
-->
        <div class="input-group">
            <input type="submit" value="Login" class="btn" name="login">
        </div>
        <p>Don't have an account?<a href="signup.php">Register</a></p>
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
        <p class="copy-rights">&copy2022 Flemiluxe Salon</p>
    </div>
</div>

<!--javascript link-->
<script src="script.js"></script>
</body>
</html>
