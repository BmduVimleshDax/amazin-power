<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $message = $_POST["message"];

    // Compose email message
    $to = "info@moovasgerman.com";  // replace with your email address
    $subject = "Contact Form Inquiry ";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Address: $address\n";
    $email_message .= "Message:\n$message";

    // Send email
    mail($to, $subject, $email_message);

   
    header("Location: thank-you.php");
    exit();
}
?>
