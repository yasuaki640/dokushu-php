<?php

$str = 'His phone number is 0399-88-9785. Mine is 0895-78-5612. Both of postal code is 456-4567';

if (preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data)) {
    print "phone number : {$data[0]} <br/>";
    print "sigai number : {$data[1]} <br/>";
    print "sinai number : {$data[2]} <br/>";
    print "register number : {$data[3]} <br/>";
}

if (preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data)) {
    print_r($data);
}

if (preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_OFFSET_CAPTURE)) {
    foreach ($data as $items) {
        print "phone number : {$items[0]} <br/>";
        print "sigai number : {$items[1]} <br/>";
        print "sinai number : {$items[2]} <br/>";
        print "register number : {$items[3]} <br/>";
    }
}
