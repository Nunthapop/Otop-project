<?php
require_once "Home_index.php";
$id =$_GET['id'];
session_destroy();
header("Location:shop.php");
?>