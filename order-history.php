<?php require "header_index.php";
$customer_id = $_SESSION['customer_id'];


$query = "SELECT 
date,
oh.id as order_id, 
od.sub_total, 
od.product_id, 
count(od.id) as product_count, 
qty,
p.product_name 
FROM order_head as oh 
JOIN order_detail as od on oh.id = od.order_head_id
JOIN product as p on od.product_id = p.id 
WHERE customer_id = $customer_id
GROUP BY oh.id, oh.total, od.product_id, p.product_name ORDER BY date desc";

$result = mysqli_query($connect, $query);
$sql_row =mysqli_num_rows($result); //count row for loop the order number
$total =0;
$i = 1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/order-history.css" /> <!-- use same css - profile -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Space+Grotesk:wght@300;400;600&display=swap"
        rel="stylesheet">

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

                    <div class="scroll">
                        <div class="container-box">
                            <?php while($row= mysqli_fetch_assoc($result) and $i <= $sql_row) {?>
                            <!-- $sql_row for loop number order  -->
                            <!-- loop start -->
                            <div class="product-box">
                                <div class="order-title"># <?php  echo $i;?></div>
                                <div class="date"> <?php echo $row['date']?></div>
                                <div class="product">
                                    <div class="product-name">
                                        <div class="sub-name"><?php echo $row['product_name']?></div> X
                                        <?php echo $row['qty']?>
                                    </div>
                                </div>
                                <div class="all-total"> <?php echo number_format($row['sub_total'],2);?> BATH</div>
                            </div>
                            <?php $total += $row['sub_total'];
                          $i++ ;} ?>
                            <!-- order loop end and then plus $i -->
                            <!-- loop end -->
                        </div>

                    </div>
                    <div class="sum-all-total">Total <?php echo number_format($total,2);?> BATH</div>

            </form>
        </div>
</body>
</main>

</html>