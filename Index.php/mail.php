<?php

if(isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $telephoneNumber = $_POST["telephoneNumber"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mailTo = "georgiagoodall1@hotmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$firstname.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
}




