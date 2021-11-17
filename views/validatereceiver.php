<?php
    require 'connection.php';
    session_start();
    $name=mysqli_real_escape_string($con,$_POST['name']);
   
    $email=mysqli_real_escape_string($con,$_POST['email']);
     
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    
     $btype=mysqli_real_escape_string($con,$_POST['btype']);
     
    $NameHospital=mysqli_real_escape_string($con,$_POST['NameHospital']);
 
      $AddressHospital=mysqli_real_escape_string($con,$_POST['AddressHospital']);
      
    $country=mysqli_real_escape_string($con,$_POST['country']);
    
    $state=mysqli_real_escape_string($con,$_POST['state']);
    
    $city=mysqli_real_escape_string($con,$_POST['city']);
    
    $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
    /*
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
     
     */
        $user_registration_query="insert into receiverDetails(name,email,contact,btype,NameHospital,AddressHospital,country,state,city,pincode) values('$name','$email','$contact','$btype','$NameHospital','$AddressHospital','$country','$state','$city','$pincode')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        
        $_SESSION['email']=$email;
        $_SESSION['id']=mysqli_insert_id($con);
        $uid=$_SESSION['id'];
        
        echo "User successfully registered. Redirecting you to your profile...";
        ?>
        <meta http-equiv="refresh" content="1;url=RegisterUser.php" />
   