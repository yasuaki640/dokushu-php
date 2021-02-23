<?php

$data = ['abe kayako', 'honda tsubasa', 'miyoshi ayaka', 'takahata mitsuki'];
print_r($data);

print_r(array_splice($data, 2, 3, ['takizawa karen', 'saito asuka', 'shiraishi mai']));
print_r($data);

print_r(array_splice($data, 3));
print_r($data);

