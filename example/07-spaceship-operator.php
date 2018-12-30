<?php
/**
 * PHP 7 Spaceship Operator
 */
declare(strict_types = 1);

$fruits = ['apple', 'blackberry', 'cherry', 'dates'];
usort($fruits, function ($a, $b) {
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
});
print_r($fruits);

$fruits = ['apple', 'blackberry', 'cherry', 'dates'];
usort($fruits, function ($a, $b) {
    return $a <=> $b;
});
print_r($fruits);
