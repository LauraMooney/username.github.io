<?php


if (isset($_POST['submit'])) {
    $name = $_POST_['name'];
    $subject = $_POST_['subject'];
    $mailFrom = $_POST_['mail'];
    $message = $_POST_['message'];

    $mailTo = ""
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;
 
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
