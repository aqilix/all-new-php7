<?php
/**
 * PHP 7 Null Coalesce operator
 */
declare(strict_types = 1);

$name = $_GET['name'] ?? 'N/A';
var_dump($name);

$_GET['name'] = 'New Operator';
$name = $_GET['name'] ?? 'N/A';
var_dump($name);
