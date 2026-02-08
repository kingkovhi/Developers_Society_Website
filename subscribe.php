<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Your email address where submissions will be sent
    $to = "kovhi.tshikovhi17.27@gmail.com";  
    $subject = "DevSoc  Signups";
    $message = "New Member : " . $email;
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for joining DevSoc";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
