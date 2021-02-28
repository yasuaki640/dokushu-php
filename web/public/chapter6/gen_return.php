<?php

function readLines(string $path)
{
    $i = 0;
    $file = fopen($path, 'rb') or die('File cannot opened');
    while ($line = fgets($file, 1024)) {
        $i++;
        yield $line;
    }
    fclose($file);

    return $i;
}

$gen = readLines('sample.txt');
foreach ($gen as $line) {
    print $line . '<br/>';
}

print "File has {$gen->getReturn()}
 lines.";