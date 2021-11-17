<?php 
require 'connection.php';
session_start();
if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
echo "abcd". $_SESSION['id']."asas";
$emailid= $_SESSION['email'];
   
    //mysql_select_db("s_network") or die("problem in database connection");
    $query= "select id,fname from user where email='$emailid'"; 
    $res=mysqli_query($con,$query) or  die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    //echo $res;
      if($rows_fetched==0){
        echo "No data Found";
      }else{
          
          $_SESSION['name11']=$row['fname'];
          $_SESSION['id']=$row['id'];
      }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>Pixelate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- Latest compiled and minified javascript -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- External CSS file -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head><!-- //style="background-color:#f4ebdb;" -->
    <body style="background-color:#f4ebdb;">   
       
        <?php require 'header1.php';
        ?>
      <?php  require 'sidebar.php'; 
      ?>
        
        
        
               
    </body>
</html>