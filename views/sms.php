<?php
	require 'connection.php';
        session_start();
        $query= "select contactno from user where btype='$btype'"; 
    $res=mysqli_query($con,$query);
    $rows_fetched=mysqli_num_rows($res);
    $row=1;
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("data not fetched");
        </script>
        <?php
      }else{
          
          while($row){
          $row=mysqli_fetch_array($res);
          $_SESSION['mobile']=$row['contactno'];
          $_SESSION['code']="91";
         
          header('location:login.php');
      
        if(isset($_SESSION['mobile'])){
        // Authorisation details.
	$username = "ankit.28.goyal@gmail.com";
	$hash = "00fbeb1087b69c1d9be4014344b3f6ba7f397c92f67a83df30a4ca6d63f2c67e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_SESSION['code'].$_SESSION['mobile']; // A single number or a comma-seperated list of numbers
	$message = "Happy Birthday !!!";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);// This is the result from the API
	if ($result == true) {
        echo "message sent!!!!";
    }
    curl_close($ch);
        }}}
?>
