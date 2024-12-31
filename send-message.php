<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set the email recipient (your email address)
    $to = "brtafreshi2023@gmail.com"; 
    $subject = "New Contact Form Submission";
    
    // Construct the email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";
    
    // Set headers for the email
    $headers = "From: no-reply@yourdomain.com\n";
    $headers .= "Reply-To: $email";
    
    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
}
?>
