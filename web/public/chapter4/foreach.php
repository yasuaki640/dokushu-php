<?php
$data = ['takae', 'kagaya', 'hio', 'usui', 'wada'];
foreach ($data as $val) {
    print "Your name is {$val} <br/>";
}

foreach ($data as &$val) {
    $val .= 'New';
}

print_r($data);

foreach ($data as &$val) {
    var_dump($val);
    if ($val === 'wada') {
        $data[] = 'suzuki';
    }
}
