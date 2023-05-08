<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the user's credentials
    if ($username == "admin" && $password == "password123") {
        // Start a new session and store the username
        $_SESSION["username"] = $username;
        
        // Redirect to the dashboard page
        header("Location: dashboard.php");
        exit();
    } else {
        // Show an error message
        echo "Invalid username or password.";
    }
}
?>
