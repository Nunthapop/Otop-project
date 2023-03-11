
<?php require "header_index.php";
$customer_id = $_SESSION['customer_id'];


$query = "SELECT * FROM customer where id =  $customer_id ";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
if (isset($_SESSION['saved'])) {
    echo $_SESSION['saved'];
    unset($_SESSION['saved']);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/profile.css" />
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
            <div class="profile"> <a href="profile.php">profile</a></div>
            <div class="order-history"><a href="order-history.php">order-history</a></div>
        </div>
        <form action="saveprofileupdate.php" method="post">
        <div class="profile-side">
            <div class="head">Profile </div>
            <div class="sub-head">User name</div>
            <input type="text" value="<?php echo $row['username']; ?>" name="user">
            <div class="sub-head">First name</div>
            <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
            <div class="sub-head">Last name</div>
            <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
            <div class="sub-head">Email</div>
            <input type="text" value="<?php echo $row['email']; ?>" name="email">
            <div class="save"> <input type="submit" value="Save"> <input type="reset" value="cancel"> </div>
            <div class="logout"> <a href="logout.php">Logout</a></div>
        </div>
    </form>
    </div>
</body>
</html>