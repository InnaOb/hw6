<?php

use Hillel\Homework\HW;

require_once 'vendor/NewAutoloader.php';

$autoloader = New Autoloader();

$autoloader->addNamespace('Hillel\Homework', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Homework');
$autoloader->register();

$new = new HW();
var_dump($new);
