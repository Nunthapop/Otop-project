<?php require "header_index.php";
if(isset($_POST['submit'])){ 
    $name = $_SESSION['name'];
$query = "SELECT max(id) as product_id  from product where product_name ='$name'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$product_id = $row['product_id'];



$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"]; 
$folder = "image/". $filename;
$query = "INSERT INTO image (img,product_id) 
VALUE('$filename','$product_id')";
$result = mysqli_query($connect, $query);
if(!$result){
    die ("insert error");
}
if (move_uploaded_file($tempname, $folder)) { //move to image folder
   
    header('Location:shop.php');
} else {
   
    header('Location:insert_product.php');
}

}
?>
<html>
<head>
        <title>upload</title>
        <link rel="stylesheet" href="css/dashboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet"> 
    </head>
    <body>
    <div class="Box">
        <div class="nav-bar">
            <div class="profile"> <a href="profile.php">profile</a></div>
            <div class="order-history"><a href="order-history.php">order-history</a></div>
            <div class="order-history"><a href="dashboard.php">Vendor</a></div>
        </div>
        <form action="upload_img.php" method="post" enctype="multipart/form-data">
        <div class="profile-side">
           
            <input type="file" name="uploadfile">
            <input type="submit" name="submit">
          
        </div>
    </form>
    </div>
</body>
</html>