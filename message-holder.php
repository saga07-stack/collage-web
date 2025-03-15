<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subjeect'];
$message = $_POST['message'];

$email_from = 'sagarmatha603@gmail.com';
$email_subject = 'New from submission';
$email_body = "user name: $name.¥n".
                "user Email : $visitor_email.¥n".
            "subject : $subject.¥n".
            "User message : $message .¥n".

    $to = 'sagarmatha603@gmail.com';
    $headers = "From: $email_form ¥r¥n";
     $headers = "reply-to : $visitor_email ¥r¥n";
     mail( $to, $email_subject,$email_body,$headers);
     header ("location: contact .html"); 

?>