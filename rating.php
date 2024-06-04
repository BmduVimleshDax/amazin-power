<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["Email id"];
    $rating = $_POST["exampleRadios"];
    $message = $_POST["exampleFormControlTextarea1"];
    $recipient_email = $_POST["recipient_email"];

    // Compose email message
    $subject = "Website Rating Form";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Rating: $rating\n";
    $email_message .= "Message:\n$message";

    // Send email
    mail($recipient_email, $subject, $email_message);

    // Redirect or display a thank you message as needed
    header("Location: thank-you.php");
    exit();
}
?>
