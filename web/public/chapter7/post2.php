<?php require_once '../Encode.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>post data</title>
</head>
<body>
Hello <?= e($_POST['name']) ?>
</body>
</html>

