<?php
use HelloWorld\SayHello;
/*
Chapter 6: Composer
- install composer
- namespace
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