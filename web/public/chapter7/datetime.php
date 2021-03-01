<?php
$now = new DateTime();
print $now->format('Y/m/d H:i:s') . '<br/>';

$london_dt = new DateTime(null, new DateTimeZone('America/Virgin'));
print $london_dt->format('Y/m/d H:i:s') . '<br/>';

$now->setDate(2016, 6, 25);
$now->setTime(14, 35, 59);
print $now->format('Y/m/d H:i:s') . '<br/>';

$now->setTime(time());
print $now->format('Y/m/d H:i:s') . '<br/>';