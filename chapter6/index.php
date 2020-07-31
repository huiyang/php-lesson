<?php
namespace App;

use HelloWorld\SayHello;

/*
Chapter 6: Composer
- install composer
- namespace
*/

/*
use System\ClassName3;
use ClassName4;

$app = new ClassName; // App\ClassName
$app = new \ClassName2; // ClassName2
$app = new ClassName3 // System\ClassName3
$app = new ClassName4 // ClassName4
*/

/* To install composer */
/*
- composer init
- composer require pqrs/helloworld
- composer require pqrs/helloworld:@dev
- add autoload
*/

require __DIR__ . '/vendor/autoload.php';

$hello = new \HelloWorld\SayHello;

$hello2 = new SayHello;

echo SayHello::world();