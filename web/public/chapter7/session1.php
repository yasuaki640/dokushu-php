<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>session data</title>
</head>
<body>
<form method="POST" action="post2.php">
    <label for="mail">mail : </label>
    <input id="mail" type="text" name="name" size="40" value="<?= e($_SESSION['email'] ?? '') ?>"/>
    <input type="submit" value="send"/>
</form>
</body>
</html>

