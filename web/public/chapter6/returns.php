<?php
declare(strict_types=1);

function max_min(float ...$args): array
{
    return [max($args), min($args)];
}

$result = max_min(10, 2, -45, 456);
print_r($result);

list($max,$min) = max_min(10, 2, -45, 456);
print "max : {$max} min : {$min}";