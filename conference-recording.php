<?php

/**
* This section ensures that Twilio gets a response.
*/

header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
echo '<Response></Response>'; // Place the desired response (if any) here.

/**
* This section actually sends the email.
*/

/* Your email address. */
$to = "david@nadavot.com";
$subject = "Message from {$_REQUEST['From']}";
$message = "You have received a message calling from {$_REQUEST['From']}";
$message = "To listen to this message, please visit this URL: {$_REQUEST['RecordingUrl']}";
$headers = "From: twilio@twilio.com"; // Who should it come from?
mail($to, $subject, $message, $message1, $headers);
