<?php
// The message
$message = "Welcome to my mail server\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('dmboost2020@gmail.com', 'My Subject', $message);
?>