<?php
require_once '../DbManager.php';

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn,:title,:price,:publish,:published)');
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    $stt->execute();

    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.html');

} catch (PDOException $e) {
    print 'error has occurred : ' . $e->getMessage();
}