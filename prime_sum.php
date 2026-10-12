<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Prime Numbers</title>
</head>
<body>
    <form method="get">
        Enter n:
        <input type="number" name="n" min="0" max="1000" required>
        <input type="submit" value="Find sum">
    </form>

<?php
if (isset($_GET['n'])) {
    $n = filter_var($_GET['n'], FILTER_VALIDATE_INT);

    if ($n === false || $n < 0 || $n > 1000) {
        echo "Enter a whole number from 0 to 1000.";
    } else {
        $count = 0;
        $num = 2;
        $sum = 0;

        while ($count < $n) {
            $prime = true;

            for ($i = 2; $i < $num; $i++) {
                if ($num % $i === 0) {
                    $prime = false;
                    break;
                }
            }

            if ($prime) {
                $sum += $num;
                $count++;
            }

            $num++;
        }

        echo "Sum of first $n prime numbers = $sum";
    }
}
?>
</body>
</html>
