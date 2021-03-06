<?php

$dsn = 'mysql:host=mysql;dbname=test;charset=utf8;port=3306';
$usr = 'user';
$pass = 'pass';
try {
    $db = new PDO($dsn, $usr, $pass);
    print 'connected to DB';
} catch (PDOException $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}
