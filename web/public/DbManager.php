<?php
declare(strict_types=1);

function getDb(): PDO
{
    $dsn = 'mysql:host=mysql;dbname=test;charset=utf8;port=3306';
    $db = new PDO($dsn, 'user', 'pass');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
