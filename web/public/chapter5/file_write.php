<?php

$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];

$file = @fopen('access.log', 'ab') or die("can't open a file.");

flock($file, LOCK_EX);
fwrite($file, implode("\t", $data) . "\n");
flock($file, LOCK_UN);
fclose($file);

print 'log has been writen to a file';

