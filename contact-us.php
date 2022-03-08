<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'mboghoedwin9@gmail.com.com';
        $emailSubject = 'New email from your contact form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thank-you.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
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
    <title>contacts</title>
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
<div class="contact-us-form">
    <form action="contact-us.php" method="post" id="contact-form">
        <h2>Contact us</h2>

        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
        <p>
            <label>Name:</label>
            <input name="name" type="text" placeholder="Enter your name"/>
        </p>
        <p>
            <label>Email Address:</label>
            <input style="cursor: pointer;" name="email" placeholder="Enter your email" type="text"/>
        </p>
        <p>
            <label>Message:</label>
            <textarea name="message">dima</textarea>
        </p>

        <p>
            <input type="submit" value="Send"/>
        </p>
    </form>
</div>



<div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63836.20039760638!2d36.04492054601212!3d-0.30301291190799834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1645663359408!5m2!1sen!2ske" width="100%" height="400" style="padding: 10px;margin: 16px auto" allowfullscreen="" loading="lazy"></iframe>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
    const constraints = {
        name: {
            presence: { allowEmpty: false }
        },
        email: {
            presence: { allowEmpty: false },
            email: true
        },
        message: {
            presence: { allowEmpty: false }
        }
    };

    const form = document.getElementById('contact-form');

    form.addEventListener('submit', function (event) {
        const formValues = {
            name: form.elements.name.value,
            email: form.elements.email.value,
            message: form.elements.message.value
        };

        const errors = validate(formValues, constraints);

        if (errors) {
            event.preventDefault();
            const errorMessage = Object
                .values(errors)
                .map(function (fieldValues) {
                    return fieldValues.join(', ')
                })
                .join("\n");

            alert(errorMessage);
        }
    }, false);
</script>

<!--javascript link-->
<!--<script src="script.js"></script>-->
</body>
</html>
