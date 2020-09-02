<?php
require('functions.php');
$query= addRecord($_POST,'department');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
if ($result) {
 	echo "success";
 } 