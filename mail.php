<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465; 
    $mail->Username = 'catharziz.twitch@gmail.com';  
    $mail->Password = 'QWerty1@#';           
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->Subject = $_POST['subject'];
    $mail->Body = "Name : ".$_POST['name']."\n"."E-Mail : ".$_POST['email']."\n".$_POST['message'];
    $mail->AddAddress('catharziz.twitch@gmail.com');
    $mail->AddAddress('steve.cw.chung@gmail.com');
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Message sent!';
	echo 'Message has been sent!';
        return true;
    }
?>
