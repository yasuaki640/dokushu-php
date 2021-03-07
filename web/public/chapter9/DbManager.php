<?php
declare(strict_types=1);

function getDb(): PDO
{
    $dsn = 'mysql:host=mysql;dbname=test;charset=utf8;port=3306';
    $usr = 'user';
    $pass = 'pass';
    return new PDO($dsn, $usr, $pass);
}
