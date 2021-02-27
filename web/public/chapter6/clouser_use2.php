<?php
function wrapper()
{
    function my_array_walk(array $array, callable $func)
    {
        foreach ($array as $key => $value) {
            $func($value, $key);
        }
    }

    $data = [123, 11, 54, 7];
    $result = 0;
    my_array_walk($data, function (float $value, int $key) use (&$result) {
        $result += $value;
    });

    print "sum : {$result}";
}

wrapper();