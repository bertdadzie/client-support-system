<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$id = $_POST['ticket_id'];
require('config/dbconfig.php');
require('functions.php');

//$emai = $reply['email'];
//$replies = $reply['replies'];
//rsort($emails);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$query= addRecord($_POST,'ticket_replies');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);

if ($result) {
$sql = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) first_name, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) image, (SELECT email FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) email,(SELECT ticket_number FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) ticketNumber FROM ticket_replies p1 ORDER by replies_id DESC LIMIT 1";
$reply = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($reply);
}
$reply= $row["replies"];
$email= $row["email"];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'helpstayafricafarm@gmail.com';   //username
    $mail->Password = '2017Jgold';   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465; 
    $mail->setFrom('dadzierbert@gmail.com', 'robert');
    $mail->addAddress($email, 'robert');
 
    //$mail->addAttachment(__DIR__ . '/attachment1.png');
    //$mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = 'Email Subject';
    $mail->Body    = '<b>"'.$reply.'"</b>';
 
    $mail->send();
     header("Location: index.php?n=reply-ticket&mid=". $id); 
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;

}





// $to_email = $email;
// $subject = "Simple Email Test via PHP";
// $body = $reply;
// $headers = "dadzie2017j@gmail.com";
 
// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }



// if($result){
// $to = $emai;
// $subject = "New Topic";
// $message = $replies;

// /* Always set content-type when sending HTML email*/
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// /* More headers */
// $headers .= 'From: helpstayafricafarm@gmail.com' . "\r\n";
// $headers .= 'Cc: ' . "\r\n";

// mail($to,$subject,$message,$headers);
// header('location: index.php?n=reply-ticket&mid='. $id);

	//echo $replies;
	//echo'<br>';
	//echo $email;
     
    // }