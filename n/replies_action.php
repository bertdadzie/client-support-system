<?php
  $mid = $_GET['mid'];

require('functions.php');
$query= addRecord($_POST,'ticket_replies');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
$id=mysqli_insert_id($con);
     if($result){
        header('location: index.php?n=reply-ticket&mid$mid');
    }else{
         header('location: ndex.php?n=reply-ticket');
        // echo mysqli_error($con);
        // //mysqli_query($con, $sql);
    }