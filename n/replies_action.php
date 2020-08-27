<?php
$id = $_POST['ticket_id'];
require('functions.php');
$query= addRecord($_POST,'ticket_replies');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
if($result){
        header('location: index.php?n=reply-ticket&mid='. $id);      
    }