<?php
require_once '../DbManager.php';

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO photo(type, data)VALUES(:type,:data)');
    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data', fopen($_FILES['photo']['tmp_name'], 'rb'), PDO::PARAM_LOB);
    $stt->execute();

    print 'uploading image succeeded!';

} catch (PDOException $e) {
    print $e->getMessage();
}