<?php

$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];

$file = @@fopen('access.csv', 'ab') or die('File can not opened');

flock($file, LOCK_EX);
fwrite($file, implode(",", $data) . "\n");
flock($file, LOCK_UN);
fclose($file);

print 'successfuly wrote to a csv file';