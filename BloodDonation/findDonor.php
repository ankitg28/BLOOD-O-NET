<?php
?>

<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- Latest compiled and minified javascript -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- External CSS file -->
        <script src="typed.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background-color:white">
<div class="col-xs-4">
                    <center>
                        <p ><h1 style="font-family:cursive;">Find Donors Here!!</h1></p>
                       <form method="post" action="find_donor.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="bloodgroup"  placeholder="BloodGroup" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="country" placeholder="Country" required="true">
                            </div>  
                            <div class="form-group">
                                <input type="text" class="form-control" name="state" placeholder="State" required="true">
                            </div>  
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div> 
                           <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-default btn-block" value="Submit Request" >
                            </div> 
                            </form>
                    </center>
                </div>
    </body>
</html>