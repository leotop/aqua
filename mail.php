<?php

$to      = 'xtx.dev@gmail.com'; 
$subject = 'Test message';
$message = 'Hello! This is a plain email message test from http://' . $_SERVER["SERVER_NAME"];
$headers = 'From: xtx.dev@gmail.com' . "\r\n" .
           'Reply-To: xtx.dev@gmail.com' . "\r\n" .
           "Bcc: danil.m@nimax.ru\r\n" . 
           'X-Mailer: PHP/' . phpversion();

echo mail($to, $subject, $message, $headers);
