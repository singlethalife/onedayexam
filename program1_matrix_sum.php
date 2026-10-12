<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Sum</title>
</head>
<body>
    <form method="get">
        Enter A: <input type="number" name="a" required><br><br>
        Enter B: <input type="number" name="b" required><br><br>
        Enter C: <input type="number" name="c" required><br><br>
        Enter D: <input type="number" name="d" required><br><br>
        <input type="submit" value="Calculate">
    </form>

<?php
if (isset($_GET['a'], $_GET['b'], $_GET['c'], $_GET['d'])) {
    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];
    $c = (int) $_GET['c'];
    $d = (int) $_GET['d'];

    echo "<table border='1'>";
    echo "<tr><td>$a</td><td>$b</td><td>" . ($a + $b) . "</td></tr>";
    echo "<tr><td>$c</td><td>$d</td><td>" . ($c + $d) . "</td></tr>";
    echo "<tr><td>" . ($a + $c) . "</td><td>" . ($b + $d) . "</td><td>" . ($a + $b + $c + $d) . "</td></tr>";
    echo "</table>";
}
?>
</body>
</html>
