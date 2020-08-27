<?php
require('config/dbconfig.php');
$id = $_POST['ticket_id'];
$pid = $_POST['status_id'];
$sql = "update ticket set status_id='$pid' where ticket_id= $id";
mysqli_query($con, $sql);
header('location: index.php?n=reply-ticket&mid='. $id);      