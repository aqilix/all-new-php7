<?php
/**
 * PHP 7 Return Type Hints
 */
declare(strict_types = 1);

function addMember(string $name, int $age, bool $active, float $deposit) : bool
{
    return 1;
}

addMember('First Member', 18, true, 10.0);
