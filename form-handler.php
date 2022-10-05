<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['post'];

$email_from = 'info@synergyfy.com.ng'; 

$email_subject = 'New Form submision';

$email_body = "User Name: $name.\n".
              "User Email: $Visitor_email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";

$to = 'adeyemoemmanuel231@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $Visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");






?>

