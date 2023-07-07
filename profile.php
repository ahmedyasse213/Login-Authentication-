<?php
// Check if the user is authenticated

// Handle form submission for updating the password

// Handle form submission for requesting a password reset
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <!-- Head content goes here -->
</head>
<body>
    <h1>Profile</h1>
    <h2>Change Password</h2>
    <form action="profile.php" method="POST">
        <!-- Change password form fields -->
        <div>
            <label for="currentPassword">Current Password:</label>
            <input type="password" name="currentPassword" id="currentPassword" required>
        </div>
        <div>
            <label for="newPassword">New Password:</label>
            <input type="password" name="newPassword" id="newPassword" required>
        </div>
        <div>
            <input type="submit" value="Change Password">
        </div>
    </form>
    <h2>Forgot Password</h2>
    <form action="profile.php" method="POST">
        <!-- Forgot password form fields -->
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <input type="submit" value="Reset Password">
        </div>
    </form>
</body>
</html>
