<?php
$name= $_post['name'];
$visitor_email= $_post['email'];
$subject= $_post['subject'];
$message= $_post['message'];

$email_from ='Eduford@gmail.com';
$email_subject ='New Form Addmission';
$email_body ="User Name: $name.\n".
"User email: $visitor_email.\n".
"subject: $subject.\n".
"message: $message.\n";

$to= 'manmeetverma12345@gmail.com';
$headers ="from: $email_from \r\n";
$headers .="reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>