<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $guardianName = $_POST["gname"];
    $guardianEmail = $_POST["gmail"];
    $childName = $_POST["cname"];
    $childAge = $_POST["cage"];
    $message = $_POST["message"];

    // Compose email content
    $to = "cksdud80003@example.com";  // Replace with your email address
    $subject = "New Appointment Request";
    $headers = "From: $guardianEmail";

    $emailContent = "Guardian Name: $guardianName\n";
    $emailContent .= "Guardian Email: $guardianEmail\n";
    $emailContent .= "Child Name: $childName\n";
    $emailContent .= "Child Age: $childAge\n\n";
    $emailContent .= "Message:\n$message";

    // Send email
    mail($to, $subject, $emailContent, $headers);

    // Return a response (you might want to handle this response in your JavaScript)
    $response = ["success" => true];
    echo json_encode($response);
} else {
    // If the request method is not POST, return an error response
    $response = ["success" => false, "error" => "Invalid request method"];
    echo json_encode($response);
}
?>