<?php
/**
 * PHP 7 Generator Delegation
 */
declare(strict_types = 1);

function even(int $limit)
{
    for ($i = 1; $i <= $limit; $i++) {
        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

$evens = even(100);
foreach ($evens as $even) {
    echo $even;
}
echo PHP_EOL;
