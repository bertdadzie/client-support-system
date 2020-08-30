<?php 
$mid = $_GET['mid'];
$midd = $_SESSION['ID'];
$sql = selectTicket($mid);
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$date= date("Y-m-d");

$sql = selectReply($mid);
$replyResult = mysqli_query($con, $sql);

$sql = selectPriority($mid);
$resultPriority = mysqli_query($con, $sql);

$sql = selectDepartment($mid);
$resultDepartment = mysqli_query($con, $sql);

$sql = selectStatus($mid);
$resultStatus = mysqli_query($con, $sql);