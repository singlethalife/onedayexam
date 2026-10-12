<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Start and End Time with a Delay</title>
</head>
<body>
    <form method="post">
        Enter seconds:
        <input type="number" name="sec" min="0" max="60" required>
        <input type="submit" value="Run">
    </form>

<?php
if (isset($_POST['sec'])) {
    $sec = filter_var($_POST['sec'], FILTER_VALIDATE_INT);

    if ($sec === false || $sec < 0 || $sec > 60) {
        echo "Enter a whole number from 0 to 60.";
    } else {
        $startTime = date("h:i:s A");
        echo "Start time: " . $startTime . "<br>";
        echo "Waiting for $sec seconds...<br>";

        sleep($sec);

        $endTime = date("h:i:s A");
        echo "End time: " . $endTime . "<br>";
        echo "Delay: $sec seconds";
    }
}
?>
</body>
</html>
