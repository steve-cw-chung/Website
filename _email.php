<?php
$charset = 'UTF-8'; //charset
$to = "steve.cw.chung@gmail.com"; // my email
$name = $_POST['name']; // sender name
$name = str_replace("'", "''", $name);
$Email = $_POST['email']; //sender email
$subject = $_POST['subject']; // subject
$subject = str_replace("'", "''", $subject);
$subject = "=?".$charset."?B?".base64_encode($subject)."?=\n";
$message = "Name: ".$name."\nMessage: ".$_POST['message']; //message
$message = str_repace("'", "''", $message);
$headers = "From: ".$Email."\r\n";
$mail_result = mail($to, $subject, $message, $headers);

if($mail_result) { ?>
<script>window.alert('Message was sent successfully');</script>
<?php } ?>

<script>window.location.replace(document.referrer);</script>