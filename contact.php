<?php
// Get data from form  

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
$to = "fourpillarsrealty2@gmail.com";
$subject = "Enquiry From contact Form";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 

$txt = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";


$headers = "From: fourpillarsrealty2@gmail.com" . "\r\n" .
            "CC: fourpillarsrealty2@gmail.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:contact-us.php");
?>