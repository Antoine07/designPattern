<?php
require_once __DIR__.'/vendor/autoload.php';

use IoC\Container;

$name='ioc\services\bar';
var_dump(strrpos($name, '\\'));
var_dump(strtolower(substr($name, strrpos('\\', $name))));