<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
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
            <li><a href="#">Reviews <span class="badge">1,000</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
 
</div>
  </div></div>
        <div class="container">
            <div class='row'>
   <div class="col-xs-3">  
       
   <input type="button" class="btn btn-primary btn-default btn-block"  onclick="window.location='http://localhost/BloodDonation/sms.php'" name="submit" value="Send Sms">
   </div>
   <div class='col-xs-3'>
   <input type="button"  class="btn btn-primary btn-default btn-block"  onclick="window.location='http://localhost/BloodDonation/email.php'" name="submit" value="Send Email">
   </div>
                <div class='col-xs-3'>
   <input type="button" class="btn btn-primary btn-default btn-block"  onclick="window.location='http://localhost/BloodDonation/closerequest.php'" name="submit" value="CloseAll Requests">
                </div>
                </div>
        </div>
</body>
</html>