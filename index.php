<?php
require ('vendor/autoload.php');

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];

$app = new \Slim\App($config);

// define Routes
require ('./routes/home.php');
require ('./routes/news.php');

$app->run();
?>
