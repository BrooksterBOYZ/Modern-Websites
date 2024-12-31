<?php
// Handle form submission when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Set up email parameters
    $to = "brtafreshi2023@gmail.com"; // Replace with your email address
    $subject = "New Contact Us Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        $confirmationMessage = "Thank you for your message! We will get back to you soon.";
    } else {
        $confirmationMessage = "Sorry, something went wrong. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="contact">
        <h1>Contact Us</h1>
        <p>If you have any questions or would like to get in touch with us, please use the form below.</p>

        <!-- Contact Form -->
        <form action="contact.php" method="POST">
            <div class="contact-form-container">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </div>
        </form>

        <?php if (isset($confirmationMessage)): ?>
            <p class="confirmation-message"><?php echo $confirmationMessage; ?></p>
        <?php endif; ?>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Our Company. All Rights Reserved.</p>
    </footer>

</body>
</html>
