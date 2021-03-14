<?php
$to = "ibmjango@gmail.com";
$subject = "This would be subject line";
$txt = "Hello world!";
$headers = "From: rajivkumar900@gmail.com" . "\r\n" .
"CC: dmboost2020@gmail.com";

mail($to,$subject,$txt,$headers);
echo("Mail Sent Successfully");
?>