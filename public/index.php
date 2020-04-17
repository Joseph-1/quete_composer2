<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;


$Hello = new Hello();
echo $Hello->talk();


use App\Wcs\Hello;

$Hello = new Hello();
echo $Hello->talk();


$SayHello = new \HelloWorld\SayHello();
echo $SayHello->world();
