<?php
session_start();
if (isset($_SESSION['error_msg'])) {
    echo '<h3 class="error">'.$_SESSION['error_msg'].'</h3>';
    unset($_SESSION['error_msg']);
    }?>

<html>
    <head><h1>REGISTER</h1>
<link rel="stylesheet" href="regis.css"></head>
    <form action="register_check.php" method="post">
        <body>
            <div class="back"></div>
            <div class="container">
            <p>USERNAME : <input type="text" name="username"></p>
            <p>FIRSTNANME : <input type="text" name="firstname"></p>
            <p>LASTNAME : <input type="text" name="lastname"></p>
            <p>PASSWORD : <input type="text" name="password"></p></div>
        </body>
        <br>
        <div class="input">
        <input type="submit" name="submit" value="SUBMIT"><input type="reset" name="reset" value="CANCEL"></div>

    </form>
</html>