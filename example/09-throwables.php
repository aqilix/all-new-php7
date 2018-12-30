<?php
/**
 * PHP 7 Throwables
 */
declare(strict_types = 1);

function addMember(string $name, int $age, bool $active, float $deposit) : bool
{
    if ($deposit < 10) {
        throw new \RuntimeException('Deposit too low');
    }

    return true;
}

try {
    addMember('Second Member', '18', 'true', 10.0);
} catch (\Error $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
} finally {
    echo 'Clean up!', PHP_EOL;
}

try {
    addMember('Third Member', 25, true, 5.00);
} catch (\Throwable $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
} finally {
    echo 'Clean up!', PHP_EOL;
}
