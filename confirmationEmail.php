<?php
// include 'config.php';
include '/phpmailer';
if(!isset($_POST['submit']))
{
    echo "error! Submit the form first"; 

}
// $name = $_POST['Name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// VALIDATION
if (empty($email)|| empty($subject)){
    echo "Email and subject are mandatory!";
    exit;
}
$email_from = 'eesha.qureshi723@gmail.com';
$email_subject = "Confirmation Email!";
$email_body = "You have received a new message from the user $name. \n"."email address: $email\n"."Here is the message:\n $message".

$to = "eesha.qureshi723@gmail.com";
$headers = "From: $email_from \r\n";

// Send an email
ini_set("SMTP","localhost");
ini_set("smtp_host","smtp.gmail.com");
ini_set("smtp_port","465");
ini_set("sendmail_from","eesha.qureshi723@gmail.com");
ini_set("sendmail_path", "G:\xampp\sendmail\sendmail.exe -t");

if (mail($to, $email_subject, $email_body, $headers)){
    echo "Thank you for sending us feedback";
}
else {
    echo "Email not sent";
}

    ?>