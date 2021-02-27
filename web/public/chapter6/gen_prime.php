<?php
declare(strict_types=1);

function getPrimes()
{
    $num = 2;
    while (true) {
        if (isPrime($num)) {
            yield $num;
        }
        $num++;
    }
}

function isPrime(int $value): bool
{
    $is_prime = true;
    for ($i = 2; $i <= floor(sqrt($value)); $i++) {
        if ($value % $i === 0) {
            $is_prime = false;
            break;
        }
    }
    return $is_prime;
}

foreach (getPrimes() as $prime) {
    if ($prime > 1000) {
        die();
    }
    print $prime . ',' . '<br/>';
}