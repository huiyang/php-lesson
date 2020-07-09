<?php

/*
Chapter 7: Simple MVC
- Setup view
- Redirect views
- Setup simple router
- Setup simple controller
- Setup simple model

Steps:
- use view engine https://platesphp.com/v3/engine/ (league/plates)
- use query parameter to handle pages
- use dispatcher route (noodlehaus/dispatch)
- add .htaccess
- add controller and autoload, then composer dumpautoload
- add simple model
*/

require __DIR__.'/../vendor/autoload.php'; // note that there is ../ 

$templates = new League\Plates\Engine(__DIR__ . '/../templates');

// Create a templates folder

echo $templates->render('hello', ['name' => 'Jonathan']);

