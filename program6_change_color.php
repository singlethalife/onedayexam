<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change First Character Color</title>
</head>
<body>
    <form method="post">
        Enter a word:
        <input type="text" name="word" required>
        <input type="submit" value="Show">
    </form>

<?php
if (isset($_POST['word'])) {
    $word = trim($_POST['word']);

    if ($word === '') {
        echo "Please enter a word.";
    } else {
        $first = htmlspecialchars($word[0], ENT_QUOTES, 'UTF-8');
        $rest = htmlspecialchars(substr($word, 1), ENT_QUOTES, 'UTF-8');
        echo "<span style='color:red'>" . $first . "</span>" . $rest;
    }
}
?>
</body>
</html>
