<?php
require 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
       ?>
  <script>
            window.alert($password);
        </script>
<?php
    //mysql_select_db("s_network") or die("problem in database connection");
    $query= "select id,email from user where email='$email' and password='$password'"; 
    $res=mysqli_query($con,$query);
    $rows_fetched=mysqli_num_rows($res);
    //echo $res;
      if($rows_fetched==0){
        ?>
        <script>
            window.alert("divyank wrong username or password");
        </script>
        <?php 
            echo "Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
      }else{
          $row=mysqli_fetch_array($res);
          $_SESSION['email']=$email;
          $_SESSION['id']=$row['id'];
        
          header('location:RegisterUser.php');
      }
}
?>
