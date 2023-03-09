<?php
session_start();
if (isset($_SESSION['error_msg'])) {
    echo '<h3 class="error">'.$_SESSION['error_msg'].'</h3>';
    unset($_SESSION['error_msg']);
    }?>

<html>
    <form action="register_check.php" method="post">
        <body>
            <p>username<input type="text" name="username"></p>
            <p>firstname<input type="text" name="firstname"></p>
            <p>lastname<input type="text" name="lastname"></p>
            <p>password<input type="text" name="password"></p>
        </body>
        <input type="submit" name="submit" value="submit">

    </form>
</html>