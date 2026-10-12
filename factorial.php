<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form method="post">
        Enter a number (0 to 20):
        <input type="number" name="num" min="0" max="20" required>
        <input type="submit" value="Show">
    </form>

<?php
if (isset($_POST['num'])) {
    $num = filter_var($_POST['num'], FILTER_VALIDATE_INT);

    if ($num === false || $num < 0 || $num > 20) {
        echo "Enter a whole number from 0 to 20.";
    } else {
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }

        echo "Factorial of $num = $fact";
    }
}
?>
</body>
</html>
