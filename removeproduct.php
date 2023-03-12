<?php require "header_index.php";


$remove = $_GET['p_name'];
echo $remove;


$query = "DELETE FROM product where product_name = '$remove'";
$result = mysqli_query($connect, $query);
if(!$result){
    die('something went wrong');
}
else
{
    header("Location:dashboard2.php");
}
?>