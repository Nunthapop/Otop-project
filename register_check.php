<?php require_once "config.php";?>
<?php session_start();

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $username =$_POST['username'];
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $password =$_POST['password'];
    $usercheck =  "SELECT * FROM  customer ";
    $result  =mysqli_query($connect, $usercheck);
        $user = mysqli_fetch_assoc($result);
        if ($user['username'] == $username ){
           $_SESSION['error_msg'] = "<script>alert('username already exit');</script>";
            header("location: register.php");
            
           
        }
        else
        {
            
            $query = "INSERT INTO customer ( username, firstname, lastname, password,level) 
            VALUES ( '$username', '$firstname', '$lastname', '$password','0')";
            $result = mysqli_query($connect, $query); 
            
            if(!$result){
                die("something went wrong");
            }else{
            echo "Added Successful";
            header("location: login.php");
        }
        
            
    
        }
 
    

       
     
}
?>
