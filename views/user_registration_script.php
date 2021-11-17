<?php
    require 'connection.php';
    session_start();
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    
    $email=mysqli_real_escape_string($con,$_POST['email']);
    
    $password=mysqli_real_escape_string($con,$_POST['password']);
    
    $contactno=mysqli_real_escape_string($con,$_POST['contactno']);
    
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
 
    $country=mysqli_real_escape_string($con,$_POST['country']);
    
    $state=mysqli_real_escape_string($con,$_POST['state']);
    
    $city=mysqli_real_escape_string($con,$_POST['city']);
    
    $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
    
    $address=mysqli_real_escape_string($con,$_POST['address']);
    
    $weight=mysqli_real_escape_string($con,$_POST['weight']);
   
    $height=mysqli_real_escape_string($con,$_POST['height']);
    
    $sex=mysqli_real_escape_string($con,$_POST['sex']);
   
    $ltbd=mysqli_real_escape_string($con,$_POST['ltbd']);
    
    $btype=mysqli_real_escape_string($con,$_POST['btype']);
    
    $duplicate_user_query="select id from user where email='$email'";
    
    $duplicate_user_query_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    
    $rows_fetched=mysqli_num_rows($duplicate_user_query_result);
    
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("This Email id already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into user(fname,lname,email,password,contactno,dob,country,state,city,pincode,address,weight,height,sex,ltbd,btype) values('$fname','$lname','$email','$password','$contactno','$dob','$country','$state','$city','$pincode','$address','$weight','$height','$sex','$ltbd','$btype')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        
        $_SESSION['email']=$email;
        $_SESSION['id']=mysqli_insert_id($con);
        $uid=$_SESSION['id'];
        
        echo "User successfully registered. Redirecting you to your profile...";
        ?>
        <meta http-equiv="refresh" content="1;url=RegisterUser.php" />
        <?php
    }
?>