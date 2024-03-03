<?php
$to      = 'arsentabaku2@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'arsentabaku2@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

   if ( mail($to, $subject, $message, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>