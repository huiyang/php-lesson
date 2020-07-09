<?php

require __DIR__.'/../vendor/autoload.php'; // note that there is ../ 

$root = '/ant/php-lesson/lesson7/web';

route('GET', $root.'/about', function () {
  return response('about');
});

route('GET', $root.'', function () {
  return response('home');
});

route('GET', $root.'/home', ['App\Controllers\HomeController', 'index']);

dispatch();
