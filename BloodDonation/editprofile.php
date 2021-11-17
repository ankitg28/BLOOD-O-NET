<?php
    require 'connection.php';   
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $id=$_SESSION['id'];
    $query="select fname,contactno,dob,city,country from user where id='$id' ";
    $result=  mysqli_query($con, $query);
    $arr = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>Blood Donation </title>
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
    <body style="background-color:#f4ebdb;">  
              <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blood-O-Net</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Edit Profile</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-wrench"></span>Change Settings</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      
    </ul>
  </div>
</nav>
        <div class="col-xs-3">
  <div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
             
             <li class="active"><a href="dashboard.php">Home</a></li>
             
            <li><a href="cancantdonate.php">Who can/can't Donate</a></li>
            <li ><a href="">About Us</a></li>
            <li><a href="#">Blood Donation Facts</a></li>
            <li><a href="editprofile.php">Profile</a></li>
            <li><a href="#">View Requests</a></li>
            <li><a href="#">Vision & Mission </a></li>
            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    
  </div>
</div>
  </div></div>
        <div >
            
             <div class="container">
                 <br><br>
             <div  >
                    <div class="col-xs-4 col-xs-offset-4" >
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <center><h1 style="color:grey;"><b>EDIT PROFILE</b></h1></center>
                            </div>
                            
                            <div class="panel-body">
                            <form method="post" action="editprofile_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="<?php echo $arr[0]?>" placeholder="Name" required="required">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="contact" value="<?php echo $arr[1]?>" placeholder="Contact" >
                            </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="dob" value="<?php echo $arr[2]?>" placeholder="Date of birth" >
                            </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="city" value="<?php echo $arr[3]?>" placeholder="City" >
                            </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="country" value="<?php echo $arr[4]?>" placeholder="Country" >
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-default btn-block" value="EDIT">
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
             </div>
             </div>
        </div>
        <br><br><br>
        <?php
            //require('footer.php');
        ?>
    </body>
</html>
                                