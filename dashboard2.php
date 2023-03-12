<?php require "header_index.php";
$customer_id = $_SESSION['customer_id'];
$username = $_SESSION['username'];


$query = "SELECT * FROM product as p join customer as c on p.vendor = c.username where p.vendor = '$username'; ";

$result = mysqli_query($connect, $query);
$sql_row =mysqli_num_rows($result); //count row for loop the order number
$total =0;
$i = 1;
$query2 = "SELECT * FROM product as p join customer as c on p.vendor = c.username where p.vendor = '$username'; ";
$result2 = mysqli_query($connect, $query2);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/dashboard2.css" /> <!-- use same css - profile -->
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
                <div class="order-history"><a href="dashboard.php">Vendor</a></div>
                <div class="order-history"><a href="dashboard2.php">Dashboard</a></div>
            </div>
            <form action="saveprofile.php" method="post">
                <div class="profile-side">
                    <div class="head">DASHBOARD</div>
                   
                    <div class="all-product">Products</div>
                    <div class="scroll">
                        <div class="container-box">
                            <?php while($row= mysqli_fetch_assoc($result) and $i <= $sql_row) {?>
                            <!-- $sql_row for loop number order  -->
                            <!-- loop start -->
                            <div class="product-box">
                                <div class="order-title">#<?php  echo $i;?></div>
                                <div class="date"> <?php echo $row['product_name']?></div>
                                <div class="product">
                                    <div class="product-name">
                                        <div class="sub-name"><?php echo $row['product_price']?></div> 
                                        
                                    </div>
                                </div>
                                <div class="all-total">  <a href="removeproduct.php?p_name=<?php echo $row['product_name']?>">REMOVE</a></div>
                            </div>
                            <?php 
                          $i++ ;} ?>
                            <!-- order loop end and then plus $i -->
                            <!-- loop end -->
                        </div>

                    </div>
                   

            </form>
        </div>
</body>
</main>

</html>