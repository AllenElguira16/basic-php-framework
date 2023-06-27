<?php

require_once '../vendor/autoload.php';

use \Core\App;

$app = new App();

// Landing Page
$app->get('/', function () {
    echo "hello world!";
});

// Home Page
$app->get('/home', function () {
    echo "hello home!";
});

// About Page
$app->get('/about', function () {
    echo "hello about!";
});

$app->start();