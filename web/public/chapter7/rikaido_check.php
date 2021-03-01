<?php

//q1
//x x x x o

//q2
$dt = new DateTime();
print $dt->format('Y/m/d H:i:s') . '<br/>';

print $dt->format('Y/m/t H:i:s') . '<br/>';

$dt->add(new DateInterval('P1Y10M'));
print $dt->format('Y/m/d H:i:s') . '<br/>';


