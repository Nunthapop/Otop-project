



<?php require "header_index.php";?>

<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" href="css/dashboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet"> 
    </head>
</html>
<?php
$query ="SELECT * FROM vendor";
$result = mysqli_query($connect, $query);
$row =mysqli_fetch_assoc($result);

if (($_SESSION['username'] == $row['username'])){?>

<title>Profile</title>
</head>
<body>
    <div class="Box">
        <div class="nav-bar">
            <div class="profile"> <a href="profile.php">profile</a></div>
            <div class="order-history"><a href="order-history.php">order-history</a></div>
            <div class="order-history"><a href="dashboard.php">Vendor</a></div>
        </div>
        <form action="saveprofileupdate.php" method="post">
        <div class="profile-side">
          
        </div>
    </form>
    </div>
</body>

  
<?php }

else{?>
   <title>Profile</title>
</head>
<body>
    <div class="Box">
        <div class="nav-bar">
            <div class="profile"> <a href="profile.php">profile</a></div>
            <div class="order-history"><a href="order-history.php">order-history</a></div>
            <div class="order-history"><a href="dashboard.php">Vendor</a></div>
        </div>
        <form action="saveprofileupdate.php" method="post">
        <div class="profile-side">
            <div class="denied">Access Denied</div>
        </div>
    </form>
    </div>
</body>
<?php }


?>

