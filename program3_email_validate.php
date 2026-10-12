<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <form method="post">
        Enter Email:
        <input type="text" name="email" required>
        <input type="submit" value="Check">
    </form>

<?php
if (isset($_POST['email'])) {
    $email = trim($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid Email Address";
    } else {
        echo "Invalid Email Address";
    }
}
?>
</body>
</html>
