<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $departure = htmlspecialchars($_POST['departure']);
    $delivery = htmlspecialchars($_POST['delivery']);
    $weight = htmlspecialchars($_POST['weight']);
    $dimensions = htmlspecialchars($_POST['dimensions']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Email content
    $to = "shedrackmoshi509@gmail.com"; // Replace with your Gmail address
    $subject = "New Quote Request from $name";
    $body = "You have received a new quote request from $name.\n\n";
    $body .= "Departure City: $departure\n";
    $body .= "Delivery City: $delivery\n";
    $body .= "Total Weight: $weight kg\n";
    $body .= "Dimensions: $dimensions cm\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your quote request has been sent successfully. Thank you!";
    } else {
        echo "Failed to send your quote request. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>