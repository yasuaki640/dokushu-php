<?php

function my_array_walk(array $array, callable $func)
{
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

function showItem($value, $key)
{
    print "{$key} : {$value}<br/>";
}

$data = ['tsubasa', 'kayako', 'yoko'];
my_array_walk($data, 'showItem');