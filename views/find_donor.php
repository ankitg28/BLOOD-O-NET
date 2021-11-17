<?php

 require 'connection.php';
    session_start();
    $bloodgroup=mysqli_real_escape_string($con,$_POST['bloodgroup']);
    
    $country=mysqli_real_escape_string($con,$_POST['country']);
    
    $state=mysqli_real_escape_string($con,$_POST['state']);
    
    $city=mysqli_real_escape_string($con,$_POST['city']);

    $query = "select fname,lname,contactno,email from user where btype='$bloodgroup' and country='$country' and city='$city' and state='$state'";
    $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
     ?>
<table border="1" class="table table-bordered table-striped table-responsive">
    <thead>
    <tr>
        <th> FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>ContactDetail</th>
    </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($query_result)==0){
            echo '<tr><td colspan="4">No Donor Available</td></tr>';
        }
        else{
            while($row=mysqli_fetch_assoc($query_result)){
                echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['email']}</td><td>{$row['contactno']}</td></tr>\n";
            }
        }
        ?>
    </tbody>
</table>

    