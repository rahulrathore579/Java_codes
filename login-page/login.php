<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Read user data from file (simulate database)
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $found = false;

    foreach ($users as $user) {
        list($stored_email, $stored_hash) = explode("|", $user);
        if ($stored_email === $email && password_verify($password, trim($stored_hash))) {
            $found = true;
            break;
        }
    }

    if ($found) {
        $_SESSION['email'] = $email;

        // Send email notification
        $to = "rahulrathore39769@gmail.com";  // Replace with your Gmail ID
        $subject = "New Login to Your Portfolio";
        $message = "User Logged In: $email";
        $headers = "From: your-website@example.com";

        mail($to, $subject, $message, $headers);

        // Redirect to your portfolio
        header("Location: https://rahulrathore579.github.io/portfolio-home/");
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>
