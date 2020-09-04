<?php 
$replies_id=$_POST['replies_id'];
$rate=$_POST['rate'];
$feedback=$_POST['feedback'];
$query= "UPDATE ticket_replies SET 	feedback = '$feedback', rate= '$rate' WHERE replies_id = $replies_id";
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
if($result){
  header('location: feedback.php?id=1');  
}
?>