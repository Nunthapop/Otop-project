<?php
session_start();
if (isset($_SESSION['error_msg'])) {
    echo '<h3 class="error">'.$_SESSION['error_msg'].'</h3>';
    unset($_SESSION['error_msg']);
    }?>

<html>

<head>
    <link rel="stylesheet" href="css/register.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Space+Grotesk:wght@300;400&display=swap"
        rel="stylesheet">
</head>
</head>
<form action="register_check.php" method="post">

    <body>
        <div class="back">
            <div class="container">
                <div class="title">Register</div>
                <p>USERNAME : </p>
                <input type="text" name="username">
                <p>FIRSTNANME : </p>
                <input type="text" name="firstname">
                <p>LASTNAME : </p>
                <input type="text" name="lastname">
                <p>PASSWORD : </p>
                <input type="text" name="password">
                <p>EMAIL: </p>
                <input type="text" name="email">
                <div class="input">
                    <input type="submit" name="submit" value="SUBMIT">
                    <input type="reset" name="reset" value="CANCEL">
                </div>
            </div>
        </div>
    </body>
    <br>


</form>

</html>