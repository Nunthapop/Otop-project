<?php
require_once "header_index.php";     
$id =$_GET['id'];


// $query = "SELECT * FROM product WHERE id ='$id'";
// $result = mysqli_query($connect, $query);
// $row = mysqli_fetch_assoc($result);

//     echo $row['product_name'];
//     echo $row['product_price'];
//     echo  $row['product_desc'];
    

?>
<html>

<head>
    <title>Product</title>
    <link rel="stylesheet" href="css/product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Space+Grotesk:wght@300;400;600&display=swap" rel="stylesheet"> 
</head>

<body>
    <?php $query = "SELECT * FROM product WHERE id ='$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
// $row = array();


//  foreach($row as $key=>$value);
//  var_dump($row['code']);
//  $code = $row['code'];
// var_dump($key , $value);
    ?>
    <div class="main">
        <form action="cart.php?id=<?php echo $id;?>&action=add" method="post">
            <div class="img-gallery">
                <img src="image/item1.jpg" alt="">
                <img src="image/item1.jpg" alt="">
                <img src="image/item1.jpg" alt="">
            </div>
            <div class="grid">
                <div class="flex-left">
                <div class="name"><?php echo$row['product_name']?></div>
                <div class="price"><?php echo number_format($row['product_price'],2)?> BATH</div>
                <div class="line"></div>
                <div class="city">CITY <?php echo $row['city'];?></div>
                <div class="desc"><?php echo $row['product_desc'];?> </div>
            </div>
                <div class="flex-right">
                <div class="line2">-Free shipping -Support our community</div>
                <input type="submit" name="submit" value="Add to cart">
                </div>
                
                
               
                <!-- <input type="text" name="qty" value="1"> -->
                
                
                <div class=""></div>
               
                
            </div>

        </form>

        
    </div>

</body>

</html>