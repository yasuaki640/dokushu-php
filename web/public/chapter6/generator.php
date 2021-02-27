<?php

function myGen()
{
    yield 'a';
    yield 'b';
    yield 'c';
}

foreach (myGen() as $value) {
    print $value . '<br />';
}