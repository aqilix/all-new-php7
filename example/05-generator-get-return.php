<?php
/**
 * PHP 7 Generator Return Expressions
 */
declare(strict_types = 1);

function even(int $limit)
{
    $count = 0;
    for ($i = 1; $i <= $limit; $i++) {
        if ($i % 2 == 0) {
            yield $i;
            $count++;
        }
    }

    return $count;
}

$evens = even(100);
foreach ($evens as $even) {
    echo $even;
}
echo PHP_EOL;
echo $evens->getReturn();
echo PHP_EOL;
