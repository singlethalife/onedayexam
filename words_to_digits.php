<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Words to Digits</title>
</head>
<body>
    <form method="post">
        Enter a number in words:
        <input type="text" name="word" required>
        <input type="submit" value="Convert">
    </form>

<?php
if (isset($_POST['word'])) {
    $word = strtolower(trim($_POST['word']));

    switch ($word) {
        case "zero":  echo "0"; break;
        case "one":   echo "1"; break;
        case "two":   echo "2"; break;
        case "three": echo "3"; break;
        case "four":  echo "4"; break;
        case "five":  echo "5"; break;
        case "six":   echo "6"; break;
        case "seven": echo "7"; break;
        case "eight": echo "8"; break;
        case "nine":  echo "9"; break;
        case "ten":   echo "10"; break;
        default:      echo "Invalid input";
    }
}
?>
</body>
</html>
