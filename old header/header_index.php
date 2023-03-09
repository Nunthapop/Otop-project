
<?php session_start();
include_once "config.php";

?>

<html>
    <head>
    <link rel="stylesheet" href="homepage.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Space+Grotesk:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header_indexx.css">
    </head>
    <form action="#">
        <body>
            
            <header >
            
                <ul class="nav">
                <li><a href="homepage.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                   
                    <li><a href="#">
                    <?php
                    if(isset($_SESSION['username'])){
                    echo "<li> <a href='logout.php'> ".$_SESSION['username']  .  ' id:' . $_SESSION['customer_id'];
                    echo "</a> </li>";
                    }
                    else{
                        echo "<a href='login.php'>LOGIN</a>";
                    }
                    ?>
        
                </a></li>
                  

                
                    
                </ul>




                
            </header>
        </body>
    </form>
</html>