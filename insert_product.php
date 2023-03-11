<?php require "header_index.php";



$name = $_POST['name'];
$_SESSION['name'] =$name;
$price =$_POST['price'];
$city = $_POST['city'];
$vendor = $_SESSION['username'];
$desc = $_POST['desc']; 
$query = "INSERT INTO product (product_name,product_price,product_desc,city,vendor) 
VALUE('$name','$price','$desc','$city','$vendor ')";
$result = mysqli_query($connect, $query);
if(!$result){
    die ("insert error");
}

header('Location:upload_img.php');
?>

