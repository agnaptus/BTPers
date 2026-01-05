#!/usr/bin/php5

<?php
$to = "juan.rivera1000@gmail.com";
$subject = "Testing PHP mail";
$message = "Hello! This is a simple email message to test if PHP works on 1and1.com.";
$from = "odilia@breakthroughperspectives.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Testing mail Sent.";
?>