<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_id = $_POST["student_id"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]) ? "Yes" : "No";

    // Perform your validation and authentication process here
    // For example, you could check the credentials against a database

    // Redirect the user after authentication
    header("Location: welcome.php");
    exit;
} else {
    // Handle if the form is not submitted
    echo "Form not submitted";
}
?>
