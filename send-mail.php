
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $name . $_POST['subject'];
$message = $_POST['message'];
$headers = "From: ".$email."\n";
$headers .= "Reply-To: ".$email."\n";

$email_to = "info@twomeycarpentry.com";

mail($email_to, $subject , $message, $headers );
?>
