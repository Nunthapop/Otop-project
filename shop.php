<?php
require "header_index.php";








// filter

// $query = "SELECT * FROM product order by id ASC  ";
//             $result = mysqli_query($connect, $query);
   
// while($row =mysqli_fetch_assoc($result)){

// }

//$rowcount =mysqli_num_rows($result)



?>


<html>
    <head>
<title>shop</title>
<link rel="stylesheet" href="css/shop.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet"> 
    </head>
    <body>
      
        
        <main>
            <?php 
            $query = "SELECT * FROM image  
            JOIN product as p on image.product_id = p.id; ";
            $result = mysqli_query($connect, $query);
            
            while($row =mysqli_fetch_assoc($result)){?>
            
            <div class="product-box">
               
                <img src="image/<?php echo$row['img']?>" alt="">
                
                <h1> <?php echo$row['product_name']; ?></h1>
                <div class="price"> Price: <?php echo number_format($row['product_price'],2)?> THB</div>
                <div class="desc"><?php echo$row['subtitle']; ?></div>
                    <div class="add"><a href="product.php?id=<?php echo$row['id'] ?>">GET IN</a></div>
            </div><?php } ?>
            
             
            
            
            
            
            
        </main>
    </body>
</html>