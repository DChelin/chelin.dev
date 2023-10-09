<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Your email address where you want to receive the form submissions
    $to = "devlynchelin6@gmail.com";

    // Subject of the email
    $subject = "New Form Submission from $name";

    // Email message body
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Check if the email was sent successfully
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request method. Please submit the form.";
}
?>
