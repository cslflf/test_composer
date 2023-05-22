<?php
require_once __DIR__ . '/vendor/autoload.php';

use Jns\Test\TestService;

$obj = new TestService();

$time = $obj->getDate();

echo $time;
