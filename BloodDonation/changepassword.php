<?php
require 'connection.php';
   if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($con,$_POST['email']);
    //mysql_select_db("s_network") or die("problem in database connection");
    $query= "select id,password from recieverdetails where email='$email'"; 
    $res=mysqli_query($con,$query);
    $rows_fetched=mysqli_num_rows($res);
    //echo $res;
      if($rows_fetched==0){
        echo "No data Found";
      }else{
          $row=mysqli_fetch_array($res);
          $_SESSION['name']=$row['name'];
          $_SESSION['id']=$row['id'];
         
      }
}
?>
