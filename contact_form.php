<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];

    $to = "peterogundipe05@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Message:\n$message";

    // Use mail() function to send the email
    mail($to, $subject, $mailBody, $headers);

    // You can also add additional logic or redirection after sending the email
    echo "Message sent successfully!";
} else {
    // Handle the case when the form is not submitted via POST
    echo "Invalid request!";
}
?>
