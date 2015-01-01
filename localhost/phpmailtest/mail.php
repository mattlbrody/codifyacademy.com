<?php
$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$message = $_POST['contactmessage'];

$formcontent="From: $name \n Email: $email \n Message: $message";

$recipient = 'mattlbrody@gmail.com'; //my email

// $subject = $_POST['Application'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 'Thank You';
?>