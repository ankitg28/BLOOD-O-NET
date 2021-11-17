<?php
    //session_start();
    //if(isset($_SESSION['email'])){
     //   header('location: profile.php');
   // }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>RegisterUser</title>
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
        <script>
            function showHint(str) {
            if (str.length == 0) { 
            document.getElementById("txtHint").innerHTML = "";
            return;
            } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
            }
            }
        </script>
    </head>
    <body class="blood">
        <div class="donation">
            <?php
            require 'header.php';
            ?>
            <div class="container">
                <br><br><br><br><br>
                <div class="row">
                   
                    <div class="col-xs-4 col-xs-offset-8">
                        <div class="panel panel-primary"  > <!--style="background-color: rgba(245, 245, 245, 0);"-->                  
                             <div class="panel-heading"> <!--style="background-color: rgba(245, 245, 245, 0);"--> 
                                <center><h1 style="color:white;font-family:cursive;"><b>REGISTER!!</b></h1></center>
                            </div>
                        
                        <div class="panel-body">
                            <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname"  pattern="[A-Z a-z]+" placeholder="FirstName" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" pattern="[A-Z a-z]+" placeholder="LastName" required="true">
                            </div>    
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" pattern=".{6,}" placeholder="PASSWORD (min 6 Chars)" required="true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="contactno" pattern="[7|8|9][0-9]{9}" placeholder="Contact no." required="true">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dob" value="your dob" onblur="(this.type='text')" onload="(this.type='text')" onpageshow="(this.type='text')" onfocus="(this.type='date')" placeholder="Date of Birth" required="true">
                            </div>
                                
                            <div class="form-group">
                                <input type="text" class="form-control" name="country" pattern="[A-Z a-z]+" placeholder="Country" required="true">
                            </div>
                                
                                
                            <div class="form-group">
                                <input type="text" class="form-control" name="state" pattern="[A-Z a-z]+" placeholder="State" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" pattern="[A-Z a-z]+" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pincode" pattern="[0-9]{6}" placeholder="Pincode" required="true">
                            </div>
                             
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                                   
                            <div class="form-group">
                                <input type="number" class="form-control" name="weight" placeholder="Weight" required="true">
                            </div>
      
                                      
                            <div class="form-group">
                                <input type="number" class="form-control" name="height" placeholder="Height" required="true">
                            </div>
                              
                                       
                            <div class="form-group">
                                 <label style="color:white;">Male</label> <input type="radio" name="sex"  value="male" >  <label style="color:white;">Female</label> <input type="radio" name="sex" value="female" >
                                
                            </div>
                                
                             <div class="form-group">
                                 <input type="date" class="form-control" name="ltbd" onblur="(this.type='text')" onload="(this.type='text')" onpageshow="(this.type='text')" onfocus="(this.type='date')" placeholder="Last Time Blood Donated" required="">
                            </div>
                                
                            <div class="form-group">
                                <label style="color:white;">BloodGroup </label>
                                <select name="btype">
                                    <option value="A+">A+ </option>
                                    <option value="B+">B+ </option>
                                    <option value="AB+">AB+ </option>
                                    <option value="O+">O+ </option>
                                    <option value="A-">A- </option>
                                    <option value="B-">B- </option>
                                    <option value="AB-">AB- </option>
                                    <option value="O-">O- </option>                                    
                                </select>
                            </div> 
                                
                                
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-default btn-block" value="Register">
                            </div>
                            
                                <p style="color:white;">Have an account? <a href="login.php" >Log in</a></p>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('footer.php');
        ?>
    </body>
</html>