<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>Pixelate</title>
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
    </head><!-- //style="background-color:#f4ebdb;" -->
    <body  style="background-color:#f4ebdb;">
                <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blood-O-Net</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Edit Profile</a></li>
      <li><a href="#"><span class="glyphicons glyphicons-vr-settings"></span>Change Settings</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      
    </ul>
  </div>
</nav>
        <div class="col-xs-3">
  <div class="container">
<div class="row">
  <div class="col-xs-3">
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
             
              <li><a href="reciever_dashboard.php">Home</a></li>
             
             <li class="active"><a href="cancantdonate.php">Who can/can't Donate</a></li>
            <li ><a href="">About Us</a></li>
            <li><a href="#">Blood Donation Facts</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">View Requests</a></li>
            <li><a href="#">Vision & Mission </a></li>
            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
</div>
  </div></div>
        <div class="col-xs-9">
            <div class="container" >
                <TABLE  style=" border-radius: px; border: 10px solid #73AD21;" id="Table1" cellSpacing="0" cellPadding="5" width="900"   >
													
                      <TR> 
                        <TD vAlign="top"> <p class="heading_color">Can...</p>
                          <p><strong>Let others benefit from your 
                            good health. Do donate blood if ...</strong> </p>
                          <ul>
                            <li>you are between age group of 18-60 years.<br>
                            </li>
                            <li>your weight is 45 kgs or more.<br>
                            </li>
                            <li>your haemoglobin is 12.5 gm% minimum.<br>
                            </li>
                            <li>your last blood donation was 3 months earlier.<br>
                            </li>
                            <li>you are healthy and have not suffered from malaria, 
                              typhoid or other transmissible disease in the recent 
                              past. </li>
                          </ul>
                          <p>There are many, many people who meet these parameters 
                            of health and fitness! </p>
                          <p><strong>Do abide by our rules - be truthful about 
                            your health status!</strong></p>
                          <p>We ensure the health of blood, before we take it, 
                            as well as after it is collected. Firstly, the donor 
                            is expected to be honest about his or her health history 
                            and current condition. Secondly, collected blood is 
                            tested for venereal diseases, hepatitis B &amp; C 
                            and AIDS. </p>
                          <p>You have to be healthy to give 'safe blood' </p>
                          <p><span class="heading_color">Can't...</span></p>
                          <p><strong>Do not donate blood if you have any of these 
                            conditions</strong></p>
                          <ul>
                            <li>cold / fever in the past 1 week.<br>
                            </li>
                            <li>under treatment with antibiotics or any other 
                              medication.<br>
                            </li>
                            <li>cardiac problems, hypertension, epilepsy, diabetes 
                              (on insulin therapy), history of cancer,chronic 
                              kidney or liver disease, bleeding tendencies, venereal 
                              disease etc. <br>
                            </li>
                            <li>major surgery in the last 6 months.<br>
                            </li>
                            <li>vaccination in the last 24 hours.<br>
                            </li>
                            <li>had a miscarriage in the last 6 months or have 
                              been pregnant / lactating in the last one year. 
                              <br>
                            </li>
                            <li>had fainting attacks during last donation.<br>
                            </li>
                            <li>have regularly received treatment with blood products.<br>
                            </li>
                            <li>shared a needle to inject drugs/ have history 
                              of drug addiction. <br>
                            </li>
                            <li>had sexual relations with different partners or 
                              with a high risk individual.<br>
                            </li>
                            <li>been tested positive for antibodies to HIV. </li>
                          </ul>
                          <p><strong>Pregnancy And Menstrual Cycle</strong></p>
                          <ul>
                            <li>Females should not donate blood during pregnancy.<br>
                            </li>
                            <li>They can donate after 6 months following a normal 
                              delivery and when they are not breast feeding. <br>
                            </li>
                            <li>Females should not donate blood if they are having 
                              heavy menstrual flow or menstrual cramps. </li>
                          </ul>
                          </TD>
													</TR>
												</TABLE>
            </div></div>
    </body>
</html> 
    
