<?php
session_start();

// Process registration form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // Validate form data (you can add additional validation if needed)

    // Store user data in session
    $_SESSION['user'] = [
        'name' => $name,
        'email' => $email
    ];

    // Display login successful message
   echo 'Registration successful. Welcome, ' . $name . '!';

    // Redirect to home page
    header('Location: Home.html');
    exit();
}
?>
