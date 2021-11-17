
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>BloodDonation</title>
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
    </head>
    <body class="harshita">
         <?php
            require 'header.php';
            ?>
       
        <div class="" style="color: ">
           
            <div class="container" >
                <div >
              
                    <div class="row">
                    
                    <div class="col-xs-4 col-xs-offset-8"  >
                        <div class="panel panel-success">
                            <div class="panel-heading" style="background-color:blue">
                            <h1  style="color:BLACK"><b>Contact The Donors </b></h1>
                            </div>
                            <div class="panel-body">
                           
                                <form method="post" action="validatereceiver.php">
                                <div class="form-group">
                                    <div class="">
                                  <label>Name </label>
                                    </div>
                                    <div>
                                    <input type="text " class="form-control" name="name" placeholder="FULL NAME " required="true" style=""> 
                                </div>
                                </div>
                                    <div class="form-group">
                                     <label>Email</label><input type="email" class="form-control" name="email" placeholder="Email" required="true">
                                </div>
                                <div class="form-group">
                                <label>Contact Number </label><input type="number" class="form-control" name="contact" placeholder="contact number " required="true">
                                </div>
                                
                            <div class="form-group">
                                <label>Required BloodGroup </label>
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
                                 <label>Name of Hospital </label>   <input type="text" class="form-control" name="NameHospital" placeholder="Name of Hospital where Blood is required  " required="true">
                                </div>
                                
                                <div class="form-group">
                                    <label>Address of Hospital </label><input type="text" class="form-control" name="AddressHospital" placeholder="address of Hospital where Blood is required  " required="true">
                                </div>
                                
                                <div class="form-group">
                              <label>Country </label>  <input type="text" class="form-control" name="country" pattern="[A-Z a-z]+" placeholder="Country" required="true">
                            </div>
                                
                                
                            <div class="form-group">
                               <label>State</label> <input type="text" class="form-control" name="state" pattern="[A-Z a-z]+" placeholder="State" required="true">
                            </div>
                            <div class="form-group">
                            <label>City </label>    <input type="text" class="form-control" name="city" pattern="[A-Z a-z]+" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                               <label>Pincode </label> <input type="text" class="form-control" name="pincode" pattern="[0-9]{6}" placeholder="Pincode" required="true">
                            </div>

                                <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-default btn-block" name="submit" value="Submit">
                                </div>
                                
                            </form>
                            </div>
                          
                    </div>
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