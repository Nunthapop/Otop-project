<?php require "header_index.php"; 
$username = $_POST['user'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$id = $_SESSION['customer_id'];
echo $id;
$query = "UPDATE customer SET username = '$username', firstname= '$fname', lastname = '$lname', email= '$email' where id = $id ";
$result = mysqli_query($connect, $query);
if(!$result){
    die('something went wrong');
}
else
{
    $_SESSION['saved'] = "<script> alert('Profile changed')</script>";
    header('Location:profile.php');
}











?>