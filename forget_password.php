<?php

// Include database connection
include('dbcon.php');


if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "", "project");

    // Check if the email exists in the database
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // Email exists, generate a password reset token and send the email
        $reset_token = bin2hex(random_bytes(16)); // Generate a random reset token
        
        // Store the token in the database with expiration time (e.g., 1 hour)
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));
        $query = "UPDATE user SET reset_token='$reset_token', reset_expiry='$expiry' WHERE email='$email'";
        mysqli_query($connection, $query);

        // Send reset email to user
        $reset_link = "http://yourwebsite.com/reset_password.php?token=$reset_token";
        $subject = "Password Reset Request";
        $message = "To reset your password, please click the following link: $reset_link";
        mail($email, $subject, $message);
        
        echo "<script>alert('A password reset link has been sent to your email.');</script>";
    } else {
        echo "<script>alert('Email not found.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form method="POST" action="forgot_password.php">
        <h2>Forgot Password</h2>
        <label for="email">Enter your email address:</label>
        <input type="email" name="email" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<style>
/* General Form Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: top;
    height: 45vh;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 330px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>