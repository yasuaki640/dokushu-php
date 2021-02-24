<?php
$data = ['takae', 'aoki', 'katabuchi'];

array_push($data, 'yamada', 'hio');
print_r($data);

array_unshift($data, 'kagaya', 'doi');
print_r($data);

print_r(array_slice($data, 2, 3));