<?php
session_start();
include_once "config.php";
$username = $_POST['username'];
$password = $_POST['password'];


$userQuery="SELECT * FROM customer where username = '$username' and password = '$password' ";

$result = mysqli_query($connect, $userQuery);
if(!$result) {
    die ("cannot run query");
}
if(mysqli_num_rows($result) == 0){
    $_SESSION['error_msg1'] = "Username or Password is incorrect .";
    header("Location: login.php");
}
else{
$row = mysqli_fetch_assoc($result);

if (($_POST['username'] == $row['username'])
&& ($_POST['password'] == $row['password'])){
    $_SESSION['customer_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['firstname'] =$row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['pass'] = $row['password'];
    header ("Location: homepage.php");
}
else{
    $_SESSION['error_msg'] = "username or password is incorrect";
    header ("Location: login.php");
}
}
?>