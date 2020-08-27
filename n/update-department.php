<?php
require('config/dbconfig.php');
$id = $_POST['ticket_id'];
$pid = $_POST['dept_id'];
$sql = "update ticket set dept_id='$pid' where ticket_id= $id";
mysqli_query($con, $sql);
header('location: index.php?n=reply-ticket&mid='. $id);      