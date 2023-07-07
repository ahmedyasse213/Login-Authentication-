<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform input validation

    // Check if the user exists and the password is correct

    // Generate JWT and redirect the user
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <!-- Head content goes here -->
</head>
<body>
    <h1>Sign In</h1>
    <form action="signin.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <input type="submit" value="Sign In">
        </div>
    </form>
</body>
</html>
