<?php
require 'PHPMailerAutoload.php';
require 'info.mail.php';
require 'validation.php';

    $name = $_REQUEST['name'];
    if (isset($_REQUEST['email']) and !($_REQUEST['email']=="")) {
        $email = $_REQUEST['email'];
        if (!(validate_email($email))) {
            echo "Please Enter Valide E-mail";
            die();
        }
    } else {
        $email = "None";
    }
    if (isset($_REQUEST['subject']) and !($_REQUEST['subject']=="")) {
        $sub ="<br><b>Subject :</b>" .$_REQUEST['subject'];
    } else {
        $sub ="";
    }
    $msg = $_REQUEST['phone'];
if (!(validate_mobile($msg))) {
    echo "Please Enter Valide Mobile number";
    die();
}

    if (strlen($name)<3) {
        echo 'Please Enter Name';
        die;
    }
  
    if (strlen($msg)<3) {
        echo 'error';
        echo $email;
        die;
    }
    $mail = new PHPMailer;

    // $mail->SMTPDebug = 1;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom(EMAIL, 'CCTV Training');
    $mail->addAddress('suraj12gonda@gmail.com', 'CCM');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($email, $name);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Mail From :'.$email;
    $mail->Body    = "<b>NAME: </b>".$name."<br><b>Number</b> :".$msg."<br><b>E-mail</b> :".$email.$sub;
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 1;
        // echo "<script>window.location='$path'</script>";
    }
// } else {
//     echo "Enter all filled";
// }
