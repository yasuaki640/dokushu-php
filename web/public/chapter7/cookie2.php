<?php setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90)) ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookie info</title>
</head>
<body>
<form method="POST" action="cookie2.php">
    Cookie is saved.
</form>
</body>
</html>


