<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <form method="post">
        Enter a number:
        <input type="number" name="num" required>
        <input type="submit" value="Show">
    </form>

<?php
if (isset($_POST['num']) && filter_var($_POST['num'], FILTER_VALIDATE_INT) !== false) {
    $num = (int) $_POST['num'];

    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>
</body>
</html>
