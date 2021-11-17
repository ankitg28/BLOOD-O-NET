
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
    <body class="log">
         <?php
            require 'header.php';
            ?>
        
        
           
             <div class="container">
                
                
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-8" style="padding-top: 10%">
                      
                        <div class="panel panel-primary"  >
                            <div class="panel-heading">
                            <center><h1 style="font-family:cursive;" ><b>LOGIN</b></h1></center>
                            </div>
                            <div class="panel-body" >
                            <form method="post" action="verifylogin.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true">
                                </div>
                                
                                <div class="radio">
                                <label><input type="radio" name="optradio">User</label>
                                <label><input type="radio" name="optradio">Hospital</label>
                                <label><input type="radio" name="optradio">Camp</label>
                                </div>
                                
                                <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-default btn-block" name="submit" value="Login">
                                </div>
                                <p>Not yet registered? <a href="RegisterUser.php">Register here</a></p>
                            </form>
                            </div>
                        </div>
                            <div style="padding-bottom: 50%">
                                
                            </div>
                    </div>
                </div>
            
        </div>
               
        
    </body>
    <?php
            require('footer.php');
        ?>
</html>    