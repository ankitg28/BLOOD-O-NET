<?php
require 'connection.php';

    //mysql_select_db("s_network") or die("problem in database connection");
    $query="delete from user where id='$id'"; 
    $res=mysqli_query($con,$query);
    $rows_fetched=mysqli_num_rows($res);
        $row=mysqli_fetch_array($res);
?>