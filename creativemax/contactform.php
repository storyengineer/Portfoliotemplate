<?php 

if (isset($_POST['submit'])) {

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $message = strip_tags(htmlspecialchars($_POST['message']));



    $mailTo = "ekendukwe@gmail.com";
    $headers = "From:  ".$name;
    $web_message = "Hey! You just got a new message from your website.\n\n"."Here are the details:\n\nName: Message:\n$message";
    

    mail( $mailTo, $message, $web_message, $headers);
    header("Location: index.html?mailsend");


}


?>



