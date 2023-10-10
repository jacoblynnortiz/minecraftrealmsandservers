<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "minecraftrealmsandservers@outlook.com";
    $headers = "From: ".$email;
    $txt = "You have received an E-mail from ".$name.". | Minecraft Realms & Servers Website.\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../contact.html?mailsend");
}