<?php
$name = $_POST['name'];
$guest_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@techwarescopesolutions.com';

$email_subject = 'Website Contact Submission';

$email_body = "Senders Name: $name.\n".
                "Senders Email: $guest_email.\n".
                "Senders Comments /  Message: $message.\n".

$to = 'info.techwarescopesolutions@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $guest_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:index.php#cont_us");