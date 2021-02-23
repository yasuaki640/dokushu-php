<?php

$msg = '住所は 184-0000 鎌ヶ谷士カシオ0-0-0です';

if (preg_match_all('|([0-9]{3})-([0-9]{4})|', $msg, $matchedes)) {
    foreach ($matchedes as $matched) {
        foreach ($matched as $value) {
            print "postal code : {$value} <br/>";
        }
    }
}