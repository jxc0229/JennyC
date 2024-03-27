<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace '123@gmail.com' with your actual email address
    $to_email = "jc3467@cornell.edu";
    
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send your message. Please try again later.";
    }
}
?>
