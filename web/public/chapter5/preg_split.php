<?php

$today = new DateTime();

$result = preg_split('|[/.\-]|', $today);

print "{$result[0]}年{$result[1]}月{$result[2]}日";