<?php 
include('config/dbconfig.php');
$query = "SELECT * FROM `roles`";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
 $role = $data['role_name'];
 echo "$role";
 ?>