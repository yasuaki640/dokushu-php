<?php
$dt = new DateTime('2016/8/8 10:45:46');
print $dt->format('Y/m/d H:i:s') . '<br/>';

$dt->add(new DateInterval('P1YT10H'));
print $dt->format('Y/m/d H:i:s') . '<br/>';

$dt->sub(new DateInterval('P3YT20H'));
print $dt->format('Y/m/d H:i:s') . '<br/>';
