<?php
require_once './DbManager.php';

try {
    $db = getDb();
    $db->exec('NOT SQL');
} catch (PDOException $e) {
    print 'error code : ' . $e->getCode() . '<br/>';
    print 'error message : ' . $e->getMessage();
}