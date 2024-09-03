<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header with menu button, logo, dark mode toggle, and logout button -->
    <div class="header">
        <button class="menu-btn"><i class="fas fa-bars"></i></button>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h2>Manage Users</h2>
        <div class="header-right">
            <div class="dark-mode-toggle">
                <label class="switch">
                    <input type="checkbox" id="darkModeSwitch">
                    <span class="slider round"></span>
                </label>
            </div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Side panel -->
    <div class="side-panel">
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <!-- User Profile -->
        <div class="user-profile">
            <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">
            <h3>CEO & Founder - Admin</h3>
        </div>

        <!-- Menu -->
        <ul class="menu-items">
            <li><a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="users.php" class="<?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : '' ?>">Manage Users</a></li>
            <li><a href="businesses.php" class="<?= basename($_SERVER['PHP_SELF']) == 'businesses.php' ? 'active' : '' ?>">Manage Businesses</a></li>
        </ul>
    </div>

    <!-- Main content area -->
    <div class="main-content">
        <h1>Manage Users</h1>
        <!-- User management content goes here -->
    </div>

    <script src="js/script.js"></script>
</body>
</html>
