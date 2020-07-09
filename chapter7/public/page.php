<?php

require __DIR__.'/../vendor/autoload.php'; // note that there is ../ 

$templates = new League\Plates\Engine(__DIR__ . '/../templates/pages');

// Create a templates folder

echo $templates->render($_GET['page'] ?? 'index');

