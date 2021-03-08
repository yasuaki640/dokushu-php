<?php
try {
    $db = new PDO(
        'mysql:host=mysql;dbname=test;charset=utf8;port=3306',
        'user',
        'pass'
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print 'DB connection established';

} catch (PDOException $e) {
    print "error has occurred : {$e->getMessage()}";
}