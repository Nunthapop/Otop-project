<?php require "header_index.php";

$email =$_POST['email'];
$address =$_POST['address'];
$phone =$_POST['phone'];
$date = Date("Y-m-d G:i:s");
$customer_id = $_SESSION['customer_id'];
$total = $_POST['total'];



$quey1 = "INSERT INTO order_head ( `customer_id`, `date`, `total`, `address`, `phone`, `email`) VALUES ( '$customer_id', '$date', '$total', '$address', '$phone', '$email')";
$result = mysqli_query($connect, $query1);

$quey2 ="SELECT max(id) FROM order_head where customer_id = $customer_id and email = $email and phone =$phone";
$result2 = mysqli_query($connect, $query2);
$row = mysqli_fetch_assoc($result2);
$order_id = $row["id"];
//not edit yet
foreach($_SESSION['cart'] as $p_id=>$qty)
{
    $sql3	= "select * from product where p_id=$p_id";
    $query3	= mysqli_query($conn, $sql3);
    $row3	= mysqli_fetch_array($query3);
    $total	= $row3['p_price']*$qty;
    
    $sql4	= "insert into order_detail values(null, '$o_id', '$p_id', '$qty', '$total')";
    $query4	= mysqli_query($conn, $sql4);
}
?>
ldldldld