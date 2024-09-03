<?php
// login_process.php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saas_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$company = $_POST['company'];
$email = $_POST['email'];
$password = $_POST['password']; // Raw password

// SQL query to check user
$sql = "SELECT * FROM users WHERE email = ? AND company = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("ss", $email, $company);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Directly compare passwords
    if ($password === $user['password']) {
        // Successful login
        session_start(); // Start the session
        session_regenerate_id(); // Regenerate session ID
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['company'] = $user['company'];
        header("Location: dashboard.php"); // Redirect to the dashboard
        exit(); // Ensure no further code is executed
    } else {
        // Failed login
        header("Location: login.php?error=invalid_credentials");
        exit(); // Ensure no further code is executed
    }
} else {
    // Failed login
    header("Location: login.php?error=invalid_credentials");
    exit(); // Ensure no further code is executed
}


