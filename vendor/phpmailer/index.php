<?php
header('Content-type: text/plain; charset=utf-8');
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['contact'])) {

    $mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'talekh999@mail.ru';          // SMTP username
    $mail->Password = 'Ordubad099'; // SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                 // TCP port to connect to

    $mail->setFrom('talehmeherrem95@gmail.com');
    $mail->addReplyTo('talehmeherrem95@gmail.com');  // Add a recipient
    $mail->isHTML(true);
    $mail->Subject = ("Yeni rəy");

    $mail->Body    = 'Name: ' . $_POST['name'] . '\r\n Number: ' . $_POST['number'] . '\r\n Email: ' . $_POST['email']  . 'Text: '.$_POST['text'];
    $mail->addAddress('talehmeherrem85@gmail.com');
    $mail->send();
    if ($mail->send()) {
        header('Location: home');
    }
     else {
        echo "Message could not be sent. Mailer Error: "; //$mail->ErrorInfo;
    }
    $mail->smtpClose();
    session_destroy();
    header("Location: ../../");
}
