<?php
require('functions.php');
$query= addRecord($_POST,'ticket_replies');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
$id=mysqli_insert_id($con);
     if($result){
        header('location: reply-ticket.php');
    }else{
        //header('location: add-ticket.php'); 
        echo mysqli_error($con);
        //mysqli_query($con, $sql);
    }