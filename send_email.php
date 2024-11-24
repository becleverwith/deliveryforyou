<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "taron.nersisyan.16@gmail.com"; // Your email address
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Thank you for your message. We will get back to you soon.'); window.location = 'thank_you.html';</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again later.'); window.location = 'contact.html';</script>";
    }
}
?>
