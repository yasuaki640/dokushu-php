<?php
require_once '../Encode.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>post data</title>
</head>
<body>
<?= e(implode(', ',$_POST['arch']))?> are chosen.
</body>
</html>

