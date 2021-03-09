<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>insert form</title>
</head>
<body>
<form method="post" action="insert_process.php">
    <div>
        <label for="isbn">ISBN : </label><br>
        <input id="isbn" type="text" name="isbn" size="25" maxlength="20">
    </div>
    <div>
        <label for="title">Title : </label><br>
        <input id="title" type="text" name="title" size="35" maxlength="150">
    </div>
    <div>
        <label for="price">Price : </label><br>
        <input id="price" type="text" name="price" size="6" maxlength="5">yen
    </div>
    <div>
        <label for="publish">Publish : </label><br>
        <input id="publish" type="text" name="publish" size="25" maxlength="30">
    </div>
    <div>
        <label for="published">Published : </label><br>
        <input id="published" type="text" name="published" size="15" maxlength="10">
    </div>
    <div>
        <input type="submit" value="register">
    </div>
    <?php
    session_start();
    $token = sha1(uniqid(mt_rand(), true));
    $_SESSION['token'];
    ?>
    <input type="hidden" name="token" value="<?php print $token; ?>">
</form>
</body>
</html>