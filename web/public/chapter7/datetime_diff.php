<?php
$dt1 = new DateTime('2016/8/8 10:45:46');
$dt2 = new DateTime('2018/8/8');

$interval = $dt1->diff($dt2, true);
print $interval->format('%Y/%m/%d %H:%i:%s');
