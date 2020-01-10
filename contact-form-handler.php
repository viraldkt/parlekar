<?php

$name = $_post['name'];
$visitor_email = $_post['email']
$visitor_phone = $_post['number']
$message = $_post['message']


$email_form = 'thakkarviral1@yahoo.com'

$email_subject = 'new form submission'

$email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
          "User Number: $visitor_phone.\n".
            "User Message: $message.\n".


$to = "thakkarviral1@yahoo.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,,$email_body,$headers);

header ("Location: contact-us.html");
?>