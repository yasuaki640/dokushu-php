<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookie info</title>
</head>
<body>
<form method="POST" action="cookie2.php">
    <label for="email">mail : </label>
    <input id="email" type="text" name="email" size="40" value="<?= e($_COOKIE['email'] ?? '') ?>">
    <input type="submit" value="send"/>
</form>
</body>
</html>


