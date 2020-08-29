<?php
  $id = $_POST['ticket_id'];

  $sql = "SELECT *,(SELECT ticket_number FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) ticketNumber, (SELECT email FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) email FROM ticket_replies p1";
    require('config/dbconfig.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $ticketNumber= $row['ticketNumber'];
    if ($ticketNumber ==$id) {
    	echo $id;
    	//echo "<br>";
    }else{
    	echo "Your ticket does not correspond any ticket";
    }




// $id = $_POST['ticket_id'];
// require('functions.php');
// $query= addRecord($_POST,'ticket_replies');
// require('config/dbconfig.php');
// $result = mysqli_query($con,$query);
// if($result){
//         header('location: index.php?n=reply-ticket&mid='. $id);      
//     }