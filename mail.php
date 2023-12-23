<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_GET['name']) && $_GET['name'] != '') {
    $name = $_GET['name'];
}
$from = "cctvtraininghub.com";
// if (isset($_GET['mail_from']) && $_GET['mail_from'] != '') {
//     $from = $_GET['mail_from'];
// }
if (isset($_GET['phone']) && $_GET['phone'] != '') {
    $phone = $_GET['phone'];
}
if (isset($_GET['email']) && $_GET['email'] != '') {
    $email = $_GET['email'];
}
if (isset($_GET['message']) && $_GET['message'] != '') {
    $msg = $_GET['message'];
}
if (isset($_GET['city']) && $_GET['city'] != '') {
    $city = $_GET['city'];
}
if (isset($_GET['course']) && $_GET['course'] != '') {
    $course = $_GET['course'];
}
//Load Composer's autoloader
require './vendor/autoload.php';
require './secure.php';
require './message.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.acpcbrepairing.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = EMAIL;                     //SMTP username
    $mail->Password   = PASS;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(EMAIL, 'CCTV Repairing Course');
    // $mail->addAddress('contact@acpcbrepairing.com', 'AC PCB User');     //Add a recipient
    $mail->addAddress('cctvtraininghubdelhi@gmail.com', 'CCTV User');     //
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo(EMAIL, 'Information');
    // $mail->addCC('cctvtraininghubdelhi@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = $_GET['mail_from'];
    $mail->Body    = $message;
    // $mail->AltBody = 

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
