<?php
/**
 * PHP 7.1 Void Return Types
 */
declare(strict_types = 1);

function one(): void
{
}

function two(): void
{
    return;
}

function three(): void
{
    return null; // invalid
}

function four(): void
{
    return 1; // invalid
}
