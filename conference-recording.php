<?php

header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
echo '<Response></Response>'; // Place the desired response (if any) here.

$to = "info@nadavot.com";
$subject = "Conference Recording";
$message = "A recording of your recent conference call has been generated.";
$message .= "To listen to this message, please visit this URL: {$_REQUEST['RecordingUrl']}";
$headers = "From: twilio@nadavot.com"; // Who should it come from?
mail($to, $subject, $message, $headers);
?>
