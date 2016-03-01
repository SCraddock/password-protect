<?php
// Get the password
$clearTextPassword = $_POST["password"];
// Encrypt password
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));
// Get the username
$username = $_POST["username"];
// Combine the username and password to form the contents for the new line in the .htpasswd
$contents = $username . ':' . $password . "\n";
// Apply the new username and password to .htpasswd file
file_put_contents('.htpasswd',   $contents, FILE_APPEND);
// Confirmation this ahs been complete
echo "Your username and password have been added to the .htpasswd file"
?>
