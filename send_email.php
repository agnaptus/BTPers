<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address (replace with your email)
    $to = "agnaptus@yahoo.com";
    $subject = "New message from contact form";
    $email_body = "You have received a new message from your website contact form.\n\n" .
                  "Here are the details:\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Message:\n$message";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect to a success page or display a success message
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If the form wasn't submitted via POST, redirect them
    header("Location: index.html");
}
?>