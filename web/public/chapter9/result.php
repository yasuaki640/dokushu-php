<?php
require_once '../DbManager.php';
require_once '../Encode.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>result set</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ISBN code</th>
        <th>Title</th>
        <th>Price</th>
        <th>Publish</th>
        <th>Published</th>
    </tr>
    <?php
    try {
        $db = getDb();
        $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
        $stt->execute();
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= e($row['isbn']) ?></td>
                <td><?= e($row['title']) ?></td>
                <td><?= e($row['price']) ?></td>
                <td><?= e($row['publish']) ?></td>
                <td><?= e($row['published']) ?></td>
            </tr>
            <?php
        }
    } catch (PDOException $e) {
        print $e->getMessage();
    }
    ?>
</table>
</body>
</html>