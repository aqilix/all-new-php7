<?php
/**
 * PHP 7 Scalar Type Hints
 */
declare(strict_types = 1);

function addMember(string $name, int $age, bool $active, float $deposit)
{
    return true;
}

addMember('First Member', 18, true, 10.0);
addMember('Second Member', '18', 'true', 10.0); // PHP Fatal error:  Uncaught TypeError
