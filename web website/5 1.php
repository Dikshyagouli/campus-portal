<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Process the form data (e.g., save to database, send email)
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>
