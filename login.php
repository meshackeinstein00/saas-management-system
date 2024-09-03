<?php
// login.php

// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAAS Management</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-card {
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 300px;
        }

        .login-card h2 {
            margin: 0 0 20px;
            text-align: center;
        }

        .login-card label {
            display: block;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .login-card select, .login-card input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #333333;
            color: #ffffff;
        }

        .login-card button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f0a500;
            color: #ffffff;
            cursor: pointer;
            font-size: 16px;
        }

        .login-card button:hover {
            background-color: #e89e00;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <label for="company">Company</label>
            <select id="company" name="company" required>
                <option value="Company 1">Company 1</option>
                <option value="Company 2">Company 2</option>
                <option value="Company 3">Company 3</option>
                <option value="Company 4">Company 4</option>
                <option value="Company 5">Company 5</option>
            </select>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
