<?php
require_once '../../app/vendor/autoload.php';

$str = '<div onclick="alert(\'fuck\')">hoge</div>';
$pur = new HTMLPurifier();
print $pur->purify($str);