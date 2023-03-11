<?php require "header_index.php";

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/". $filename;
$query = "INSERT INTO product (img) VALUE('$filename')";
$result = mysqli_query($connect, $query);
if(!$result){
    die ("insert error");
}
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}


$query = "SELECT img FROM product where id = 19 ";
$result = mysqli_query($connect, $query);
$row =mysqli_fetch_assoc($result);
var_dump($row['img']);
?>
<img src="image/<?php echo $row['img'];?>" alt="">