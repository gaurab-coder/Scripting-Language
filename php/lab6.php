<?php
  $to = "someone@example.com";
  $subject = "Test Mail";
  $message = "Hello from PHP mail() function.";
  $headers = "From: admin@example.com" . "\r\n" . "Cc: backup@example.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully.";
  } else {
    echo "Mail sending requires a configured SMTP server.";
  }
?>
