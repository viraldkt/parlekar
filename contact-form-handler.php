<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['number'];
$message = $_POST['message'];


$email_from = 'parlepolicemitra@gmail.com';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
          "User Number: $visitor_phone.\n".
            "User Message: $message.\n".


$to = "parlepolicemitra@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header ("Location: index.html");
?>