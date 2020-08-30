
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'helpstayafricafarm@gmail.com';   //username
    $mail->Password = '2017Jgold';   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('dadzierbert@gmail.com', 'robert');
    $mail->addAddress('dadzierbert@gmail.com', 'robert');
 
    //$mail->addAttachment(__DIR__ . '/attachment1.png');
    //$mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = 'Email Subject';
    $mail->Body    = '<b>Email Body</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;

}

// $to_email = "dadzierbert@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi,nn This is test email send by PHP Script";
// $headers = "dadzie2017j@gmail.com";
 
// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }