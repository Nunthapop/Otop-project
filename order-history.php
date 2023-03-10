<?php require "header_index.php";
$customer_id = $_SESSION['customer_id'];


$query = "SELECT 
oh.id as order_id, 
oh.total, 
od.product_id, 
count(od.id) as product_count, 
p.product_name 
FROM order_head as oh 
JOIN order_detail as od on oh.id = od.order_head_id
JOIN product as p on od.product_id = p.id 
WHERE oh.id = 1
GROUP BY oh.id, oh.total, od.product_id, p.product_name;"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/order-history.css" />   <!-- use same css - profile -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Space+Grotesk:wght@300;400;600&display=swap" rel="stylesheet">

    <title>order-history</title>
</head>
<body>
    <main>

   
    <div class="Box">
        <div class="nav-bar">
        <div class="profile"> <a href="profile.php">profile</a></div>
            <div class="order-history"><a href="order-history.php">order-history</a></div>
        </div>
        <form action="saveprofile.php">
        <div class="profile-side">
            <div class="head">ORDER-HISTORY </div>
            <img src="image/package.png" alt="">
                <div class="product-box">
                    <div class="order-title"># 1</div> 
                    <div class="date"> Date : 2023-4-8</div>
                    <div class="product">
                        <div class="product-name">product-na</div>
                    <div class="product-name">product-na 2000bath X2</div> 
                </div>
                <div class="all-total">2000 BATH</div>
            
        </div> 
    </form>
    </div>
</body>
</main>
</html>