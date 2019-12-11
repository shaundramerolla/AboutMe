<?php
if($_POST["submit"]) {
    $recipient="shaundramerolla@bu.edu";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody);
} ?>
