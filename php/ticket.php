<?php
if(!isset($_POST['submit']))
{
    echo "Feil; Du må sende henvendelsen!";
}
$name = $_POST['name']
$email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

if(empty($name)||empty($email))
{
    echo "Mangler navn og epost"
    exit;
}

$email_from = "realmeashow@gmail.com";
$email_subject = "Ny henvendelse fra Toby Nett";
$email_body = "Hendvendelse fra $name.\n", 
                "Epost: $email\n",
                "Emne: $subject\n",
                "Melding: $message",
$to = "realmeashow@gmail.com";
$headers = "Fra: $email"

mail($to,$email_subject,$email_body,$headers);
?>