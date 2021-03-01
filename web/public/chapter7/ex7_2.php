<?php

$fmt = 'Y年m月d日';
$time_str = '2016年12月04日';

$dt = DateTime::createFromFormat($fmt, $time_str);

print $dt->format('Y/m/d H:i:s');
