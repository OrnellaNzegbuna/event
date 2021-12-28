<?php

$host = 'localhost';
$dbname='event-planning';
$username='root';
$password='';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "Onzegbuna@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thanks for your submission!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>