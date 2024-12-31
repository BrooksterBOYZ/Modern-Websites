<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Define recipient email (replace with your own email)
    $to = "brtafreshi2023@gmail.com";  // Change this to your email address
    $subject = "New Contact Us Message from $name";
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-Type: text/plain; charset=UTF-8";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
