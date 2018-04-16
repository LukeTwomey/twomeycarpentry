
<?php
$name = $_POST['name'];
$fromemail = "info@twomeycarpentry.com";
$replyemail = $_POST['email'];
$subject = $name . $_POST['subject'];
$message = $_POST['message'];
$headers = "From: ".$fromemail."\n";
$headers .= "Reply-To: ".$replyemail."\n";

$email_to = "info@twomeycarpentry.com";

mail($email_to, $subject , $message, $headers );
?>
