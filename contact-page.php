<?php
    $recipient = "c.harris3@ymail.com";
    $name = $_POST["full-name"];
    $phone_number = $_POST["phone-number"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $selection = $_POST["contact-page-dropdown"];
    $message = $_POST["contact-page-message"];
    $subject = $name." from ".$city."," .$state." would like to speak about ".$selection;
    $emailMessage = "From: ".$name ."-". $email."\n Message: ".$message;    
    mail($recipient,$subject,$emailMessage) or die("There was a problem sending the email.");
?>