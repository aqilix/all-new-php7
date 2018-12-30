<?php
/**
 * PHP 7.1 Multiple Exception Types
 */
declare(strict_types = 1);

function calculate(float $param1, float $param2) : float
{
    if ($param1 <= 0 || $param2 <= 0) {
        throw new \InvalidArgumentException('param 1 and param 2 should be greater than 0');
    }

    if ($param2 > $param1) {
        throw new \LogicException('param 2 should not be greater than param 1');
    }

    return $param1 / $param2;
}

$result = 0;
try {
    $result = calculate(0.5, 1);
} catch (\InvalidArgumentException | \LogicException $e) {
    echo $e->getMessage();
}
