<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Perform any necessary processing (e.g., validation, database operations, etc.)
    
    // You can redirect the user to a different page after form submission
    header("Location: success.html");
    exit; // Make sure to exit after the redirection
}
?>
