<?php
/**
 * PHP 7.1 Iterable Pseudo-Type
 */
declare(strict_types = 1);

class Fruits implements \IteratorAggregate
{
    protected $data = ['apple', 'blueberry', 'cherry', 'dates'];

    public function getIterator()
    {
        //return $this->data;
        return new \ArrayIterator($this->data);
    }
}

function exportArray() : iterable
{
     return [
         'apple', 'blueberry', 'cherry', 'dates'
     ];
}

function exportGen() : iterable
{
    yield 'apple';
    yield 'blueberry';
    yield 'cherry';
    yield 'dates';
}

function import(iterable $fruits)
{
    foreach ($fruits as $fruit) {
        echo $fruit, PHP_EOL;
    }
}

import(exportArray());
import(exportGen());
import(new Fruits);
import('asdfasd'); // PHP Fatal error:  Uncaught TypeError:
