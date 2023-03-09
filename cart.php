<?php 


require "header_index.php";
if(isset($_SESSION['customer_id'])){


  $p_id = $_GET['id']; 
$act = $_GET['action'];
  

// if($p_id == 0){
//   echo "<div class='empty'> Ops...Your card is empty</div>";
// }


if($act=='add' && !empty($p_id))
{
    if(isset($_SESSION['cart'][$p_id]))
    {
        $_SESSION['cart'][$p_id]++; //post increment  $session[][idที่ add มา] => array (จำนวนที่เรากดใส่ตะกร้า)
    }
    else
    {
        $_SESSION['cart'][$p_id]=1; //จำนวนเริ่มต้นของตะกร้า
    }
}
if($act=='decrement' && !empty($p_id)){
    if(isset($_SESSION['cart'][$p_id]))
    {
        $_SESSION['cart'][$p_id]--;
    }
    if($_SESSION['cart'][$p_id] < 1){ //
        unset($_SESSION['cart'][$p_id]);
        header("location:cart.php?id=0&action=non");
    }
}

if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
{
    unset($_SESSION['cart'][$p_id]);
}
// if(empty($_SESSION['cart']) )
// {
//   header("location: cart.php");
// }


// if($act=='update')
// {
//     $amount_array = $_SESSION['cart'][$p_id];
//     foreach($amount_array as $p_id=>$amount)
//     {
//         $_SESSION['cart'][$p_id]=$amount;
//     }
// }



?>


<html>

<head>
    <link rel="stylesheet" href="cart.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet"> 
</head>

<body>
    <form action="confirm.php?id=<?php $_SESSION['customer_id']?>" method="post">
        <main>
            <!-- grid -->
            <div class="product-list">
                <div class="box">
                    <!-- start -->
                    <?php $total=0;
                    $final_total =0;
                    $fee =50;
                    $shipping = 0;

                    if($shipping == 0){ 
                      $shipping = "free shipping";}

          if(!empty($_SESSION['cart']))
        { 
            include "config.php";
            foreach($_SESSION['cart'] as $p_id=>$qty)
            
            {
              $sql = "select * from product where id=$p_id";
		      $query = mysqli_query($connect, $sql);
		        $row = mysqli_fetch_array($query);
		        $sum = $row['product_price'] * $qty;
		        $total += $sum;

            
            
            
            
            ?>
                    <div class="product">
                        <div class="grid1">
                            <img src="image/1.webp" alt="" />
                        </div>
                        <div class="grid2">
                            <div class="product-name"><?php echo $row['product_name']?></div>
                            <div class="price"><?php echo number_format($sum,2)?> ฿</div>
                        </div>
                        <div class="grid3">
                            <div class="add">
                                <div class="box-add">
                                    <div class="Decrements"> <a
                                            href="cart.php?id=<?php echo $p_id ?>&action=decrement">-</a></div>
                                    <div class="qty"><?php echo $qty?></div>
                                    <div class="Increments"><a href="cart.php?id=<?php echo $p_id ?>&action=add">+</a>
                                    </div>
                                </div>
                                <div class="remove"><a href='cart.php?id=<?php echo $p_id ?>&action=remove'>Remove</a></div>
                            </div>
                        </div>
                    </div> 
                    <?php }
          
        }
        else
        {
          echo "<div class='empty'> Ops...Your card is empty!
          
          </div>";
        }
        $final_total = $total + $fee;
          ?>
                    <!-- end -->
                </div>
            </div>

            <div class="payment">
                <!-- main-child -->
                <p>Code</p>
                <div class="email"> <input type="text" placeholder=" Code"></div>
                <!-- <p>Address</p>
                <div class="address"> <input type="text" placeholder=" Address"></div>
                <p>Phone</p> -->
                <!-- <div class="phone"> <input type="text" placeholder=" Phone-number"></div> -->
                <div class="subtotal"> Subtotal <div class="sub-price"><?php echo number_format($total,2)?> ฿</div>
                </div>
                <div class="shipping">Shipping <div class="ship-price"><?php echo $shipping ?> </div>
                </div>
                <div class="fee">Fee <div class="fee-price"><?php echo number_format($fee,2) ?> ฿</div>
                </div>
                <div class="total">Total <div class="total-price"> <?php echo number_format($final_total,2) ?> ฿</div>
                </div>
                <input type="submit" value="checkout" name="checkout"> 
               
            </div>
            </div>

        </main>
    </form>
</body>

</html>
<?php }
        else{
          $_SESSION['plz-login'] = " <script> alert('PLEASE LOG IN')</script> ";
          header("location:login.php");}?>