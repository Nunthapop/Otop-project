
<?php require "header_index.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="profile.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Space+Grotesk:wght@300;400;600&display=swap" rel="stylesheet">

    <title>Profile</title>
</head>
<body>
    <div class="Box">
        <div class="nav-bar">
            <div class="profile">profile</div>
            <div class="order-history">order-history</div>
        </div>
        <form action="saveprofile.php">
        <div class="profile-side">
            <div class="head">Profile </div>
            <div class="sub-head">User name</div>
            <input type="text" value="Atrk">
            <div class="sub-head">First name</div>
            <input type="text" value="s">
            <div class="sub-head">Last name</div>
            <input type="text" value="Atrk">
            <div class="sub-head">Email</div>
            <input type="text" value="Atrk">
            <div class="save"> <input type="submit" value="Save"> <input type="reset" value="cancel"> </div>
        </div>
    </form>
    </div>
</body>
</html>