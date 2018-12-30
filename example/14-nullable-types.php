<?php
/**
 * PHP 7.1 Nullable Types
 */
declare(strict_types = 1);

function hi(?string $name = null)
{
    echo 'Hi ' , $name , PHP_EOL;
}

function getName(?string $name) : ?string
{
    return $name;
}

function hello(?string $name)
{
    echo 'Hello ' , $name , PHP_EOL;
}

hi(getName('Dolly'));
hi(getName(null));
hi();
hello(getName('Dolly'));
hello(getName(null));
hello(); // PHP Fatal error
