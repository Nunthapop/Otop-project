<?php
session_start();
include_once "config.php";
$id =$_GET['id'];
$customer_id = $_SESSION['customer_id'];
// $_SESSION['cart'];
$qty = $_POST['qty'];

$query = "SELECT id from shopping_cart where customer_id = $customer_id";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) == 0){
  // create the cart
  $query = "INSERT INTO shopping_cart (customer_id)  value('$customer_id')";
  $result = mysqli_query($connect, $query);
  echo "insert id";
}
else 
{


  //select customer id to insert to cart_item
  $query = "SELECT id from shopping_cart where customer_id = $customer_id";
  $result = mysqli_query($connect, $query);
  $row = mysqli_fetch_assoc($result);
    $cart_id = $row['id'];
//insert to cart_item
    $query = "INSERT INTO shopping_cart_item (cart_id, product_id, qty)  value('$cart_id', '$id', 1)";
  $result = mysqli_query($connect, $query);

  //show the cart the product
$query ="SELECT 
item.product_id, 
customer_id, 
SUM(qty) as total_qty, 
SUM(product_price * qty) as total_cost, 
product_name 
FROM 
shopping_cart_item as item 
JOIN shopping_cart as cart on item.cart_id = cart.id 
JOIN product as p ON item.product_id = p.id 
WHERE 
customer_id = $customer_id 
GROUP BY 
item.product_id; ";
                              $result = mysqli_query($connect, $query);
  while($row = mysqli_fetch_assoc($result)) {?>
  <html>
    <form action="" method="post">

    
    <body>
      <table border="1">
        <tr>
          <th>Product_id</th>
          <th>customer_id</th>
          <th>qty</th>
          <th>total cost</th>
        </tr>
        <tr>
          <td><?php echo $row['product_id']?></td>
<?php switch($row['product_id']){
          case 1:
            $id_edit = 1;
            break;
            case 1:
}



?> 







          <td> <?php echo $row['customer_id']?></td> 
          <td>  <?php echo $row['total_qty'] ?> <a href="updatecart.php?qty=<?php echo $row['total_qty'] ?>">+</a> 
           <a href="deletecart.php?qty=<?php echo $row['total_qty'] ?>">-</a>    </td>
          <td> <?php echo $row['total_cost'] ?></td>
        </tr>
      </table>
    </body>
    </form>
  </html>
   
<?php }
//SELECT product_id, customer_id, SUM(qty), SUM(product_price), product_name from shopping_cart_item as item JOIN shopping_cart as cart on item.cart_id = cart.id JOIN product as p ON item.product_id = p.id where customer_id = 2 and product_id = 1;
} ?> 
  
