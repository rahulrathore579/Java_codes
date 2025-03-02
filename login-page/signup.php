<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    // Save user credentials
    $file = fopen("users.txt", "a");
    fwrite($file, "$email|$password\n");
    fclose($file);

    // Send signup notification
    $to = "your-email@gmail.com";  // Replace with your Gmail ID
    $subject = "New User Signed Up";
    $message = "New User: $email";
    $headers = "From: your-website@example.com";

    mail($to, $subject, $message, $headers);

    // Redirect to login page
    header("Location: index.html");
    exit();
}
?>
