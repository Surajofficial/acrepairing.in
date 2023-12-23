<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
}
$from = "acpcbrepairing.com";
if (isset($_POST['mail_from']) && $_POST['mail_from'] != '') {
    $from = $_POST['mail_from'];
}
if (isset($_POST['phone']) && $_POST['phone'] != '') {
    $phone = $_POST['phone'];
}
if (isset($_POST['email']) && $_POST['email'] != '') {
    $email = $_POST['email'];
}
if (isset($_POST['message']) && $_POST['message'] != '') {
    $msg = $_POST['message'];
}
if (isset($_POST['city']) && $_POST['city'] != '') {
    $city = $_POST['city'];
}
if (isset($_POST['course']) && $_POST['course'] != '') {
    $course = $_POST['course'];
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
    $mail->setFrom(EMAIL, 'Ac PCB Repairing Course');
    // $mail->addAddress('contact@acpcbrepairing.com', 'AC PCB User');     //Add a recipient
    $mail->addAddress('suraj12gonda@gmail.com', 'AC PCB User');     //
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo(EMAIL, 'Information');
    $mail->addCC('ACPCBREPAIRING.COM@Gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['mail_from'];
    $mail->Body    = $message;
    // $mail->AltBody = 

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
