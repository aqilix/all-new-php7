<?php
/**
 * PHP 7 Constants Array
 */
declare(strict_types = 1);

class Version
{
    const APP = [
        'versionName' => 'ArrayType Constant',
        'versionCode' => '01'
    ];
}

echo Version::APP['versionName'];

define('APP', [
    'versionName' => 'ArrayType Constant',
    'versionCode' => '01'
]);

echo APP['versionName'], PHP_EOL;
