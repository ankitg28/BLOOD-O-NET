 <?php
    /*session_start();
    if(isset($_SESSION['email'])){
     header ('location:profile.php');
    }*/
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
       <?php
            require('header1.php');
        ?>

         <div class="container-fluid">
            
            <div class="row" id="indexBanner watermark">
                <div class="col-xs-4" >
                
                    
                    <div class="w3-content w3-section" style="max-width:100%">
                        <center> 
                 <img class="mySlides" src="images/banner52.jpg" style="width:300% ; height:700px" >
                 <img class="mySlides" src="images/image1.jpg" style="width:300% ; height: 700px ">
                 <img class="mySlides" src="images/image2.jpg" style="width:300% ; height: 700px">
                 <img class="mySlides" src="images/image3.jpg" style="width:300% ; height: 700px">
                  </center>
                </div>
                
                </div>
                <!--<div class="col-xs-4">
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
                </div>-->
            </div>
            
            
            <div class="row">
                
                <center>
                    <br>
                    <p style="font-size:20px; color:#000033; font-family:cursive; "><b>"THE MEASURE OF LIFE IS NOT ITS DURATION BUT IT'S DONATION"</b></p>     <!--#2c4a52-->
                    <p style="font-size:20px; color:#000033; font-family:cursive; "><b>"A SINGLE PINT CAN SAVE 3 LIVES<br>YOUR ONE SINGLE STEP CAN CREATE MILLION SMILES &#x263B;"</b></p> 
                    <br>
                </center>
                
                <!--<div class="col-xs-4">
                    <center>
                        <a href="receiverUrgent.php" ><button type="button"class="btn btn-info" style="font-size:40px;margin-top:40px;">Send Request To Donors</button> </a>
                    </center>
                </div>-->
            </div>
            <div class="row">
                <div class="col-xs-4">
                <center>
                <!-- <div class="w3-content w3-section" style="max-width:500px">
                 <img class="mySlides" src="images/banner1.png" style="width:100%">
                 <img class="mySlides" src="images/banner2.jpg" style="width:100%">
                 <img class="mySlides" src="images/banner3.png" style="width:100%">
                </div> -->
                 </center>
                </div>
                <div class="col-xs-4">
                    <iframe width="400" height="400" src="https://www.youtube.com/embed/E9QxiGPwab4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-xs-4">
                    <div class="typed-about">
                        <h5><b>BLOOD DONATION HELPS IN</b><br class="visible-xs"><span class="element"></span></h5>
                    </div>
                    <p class="about-para">There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia.</p>
               <script>
                  $(function(){
        $(".element").typed({
            strings: [" weight loss", " saving life", " preventing cancer", " boosting new bloodcells", " maintaining good health", " preventing hemochromatosis"],
            loop:true,
            backDelay:500,
            typeSpeed: 1,
        });
    });
               </script>
                </div>
            </div>
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                       x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
                </script>
                
                <div class="row">
                    <div class="col-xs-4">
                        <center>
                        <img src="images/banner10.jpg" height="200" width="200">
                        </center>
                    </div> 
                    <div class="col-xs-4">
                        <center>
                        <img src="images/banner11.jpg" height="200" width="200">
                        </center>
                    </div> 
                    <div class="col-xs-4">
                        <center>
                        <img src="images/banner12.png" height="200" width="200" >
                        </center>
                    </div> 
                </div>
                
         </div>  
        <?php
            require('footer.php');
        ?>
         </body>
 </html>